# coding: utf8

import datetime, time, sys, twitter, json
import MySQLdb as mysql
from dateutil import parser

api = twitter.Api(
    consumer_key = '89LDtFrOhOMUgS1J09Qm5ldng',
    consumer_secret = 'WnB51ZC0SlcewmRceAnGPYEge1uLg9llxwk6sv37MAumEHNZhr',
    access_token_key = '832600508238004228-m7oMlC7UNjQiVDscbmfd0yowBSe7uLT',
    access_token_secret = 'RBzzKd0Ug37ongv9JEvrteJFRdi8Ght4rUTKX21dlQGo2'
)

app_user = "app"
password = "18052017"
db = "Ter"

select_candidats_ids = u"SELECT id_twitter_candidat\n\
                        FROM candidat;"

select_last_tweet_from =   u"SELECT max(id_tweet)\n\
                            FROM tweet t, candidat c\n\
                            WHERE t.nom_candidat = c.nom_candidat\n\
                            AND c.id_twitter_candidat = %s;"

select_name =  u"SELECT nom_candidat\n\
                FROM candidat\n\
                WHERE id_twitter_candidat = %s;"

insert_tweet = u"INSERT IGNORE INTO tweet VALUE \n\
                    (%s, %s, %s, %s, %s);"

err = ""

def getTweets(user_id, last_id):
    last_tweet = api.GetUserTimeline(user_id, count=1)
    list_tweets = [last_tweet[-1]]
    listIds = [last_tweet[-1].id]
    end = False

    for i in range(0,16):
        tweets = api.GetUserTimeline(user_id, count=200, max_id=(listIds[-1]-1))

        for tweet in tweets:

            if ((int(tweet.created_at.split()[-1]) < 2016)
            or (int(tweet.id) < last_id)):
                end = True
                break
            else:
                listIds.append(tweet.id)
                list_tweets.append(tweet)
                if end:
                    break

    return list_tweets

def post(tweet, connection):
    identificator = unicode(tweet.id)

    tw_sec = tweet.created_at_in_seconds
    tw_date = time.gmtime(tw_sec)
    create_at = unicode(time.strftime('%Y-%m-%d', tw_date))

    text = unicode(tweet.text)

    retweet = u'%s' % tweet.retweet_count

    user = tweet.user.id
    request = connection.cursor()
    select = select_name % user
    request.execute(select)
    name = unicode(request.fetchone()[0])

    try:
        params = (identificator, text, create_at, retweet, name)

        with connection:
            current = connection.cursor()
            err = tweet
            current.execute(insert_tweet, params)

    except:
        errors = sys.exc_info()
        for e in errors:
            print("%s" % e)


try:
    connection = mysql.connect("localhost", app_user, password, db, charset="utf8mb4")
    connection.query
    request = connection.cursor()

    request.execute(select_candidats_ids)
    ids = request.fetchall()

    for candidat in ids:
        request.execute(select_last_tweet_from % candidat)
        id_tweet = request.fetchone()[0]
        id_tweet = 0 if id_tweet is None else id_tweet

        tweets = getTweets(candidat[0], id_tweet)

        for tweet in tweets:
            if(len(tweets) > 1) :
                post(tweet, connection)
            else :
                post(tweets[0], connection)
except:
    errors = sys.exc_info()
    for e in errors:
        print("%s" % e)

    print(tweet)
    sys.exit(1)
finally:
    if connection:
        connection.close()
