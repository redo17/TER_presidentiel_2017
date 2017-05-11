# coding: utf8

from __future__ import print_function, unicode_literals
from syntactic_parser.parser import Parser
import MySQLdb as mysql

app_user = "app"
password = "18052017"
db = "Ter"

connection = mysql.connect("localhost", app_user, password, db, charset="utf8mb4")

select_not_processed = u"SELECT id_tweet, texte_tweet\
                         FROM tweet \
                         WHERE id_tweet \
                         NOT IN (SELECT id_tweet FROM contenir);"

insert_new_mot = u"INSERT IGNORE INTO mot VALUES (%s, %s)"
insert_new_contenir = u"INSERT INTO contenir VALUES (%s, %s, DEFAULT)\
                        ON DUPLICATE KEY UPDATE\
                        occurences_contenir = occurences_contenir + 1"

parser = Parser(language='fr')

def processTweet(id_tweet, texte_tweet, rows_mot, rows_contenir):
    result = parser.process_document(texte_tweet.encode("utf8"))
    for sentence in result:
        for token in sentence:
            lemma = token['lemma']
            pos = token['pos']
            if(pos in ['np', 'nc', 'adj', 'adv', 'v']):
                rows_mot.append((lemma, pos))
                rows_contenir.append((id_tweet, lemma))

def processTweets():
    request = connection.cursor()
    request.execute(select_not_processed)
    nxt = True
    rows_mot = []
    rows_contenir = []
    tweets = request.fetchall()
    for tweet in tweets:
        id_tweet = tweet[0]
        texte_tweet = u"%s" % tweet[1]
        processTweet(id_tweet, texte_tweet, rows_mot, rows_contenir)
    with connection:
        access = connection.cursor()
        access.executemany(insert_new_mot, rows_mot)
        access.executemany(insert_new_contenir, rows_contenir)

# MAIN #
processTweets()
