# coding: utf8

from __future__ import print_function, unicode_literals
import MySQLdb as mysql
import math

app_user = "app"
password = "18052017"
db = "Ter"

connection = mysql.connect("localhost", app_user, password, db, charset="utf8mb4")


selection_vocabulary = u"SELECT valeur_mot FROM mot;"
selection_noms = u"SELECT nom_candidat FROM candidat;"
selection_comptes = u"  SELECT nom_candidat, valeur_mot, compte_resultat\
                        FROM resultat_mot;"

insertion_resultats = u"REPLACE INTO resultat_distance VALUE (%s, %s, %s);"

def distance(voc1, voc2, ref):
    scal = 0
    cnorm1 = 0
    cnorm2 = 0
    for mot in ref:
        scal += voc1[mot] * voc2[mot]
        cnorm1 += pow(voc1[mot], 2)
        cnorm2 += pow(voc2[mot], 2)

    cnorm1 = math.sqrt(cnorm1)
    cnorm2 = math.sqrt(cnorm2)
    dist = scal / (cnorm1 * cnorm2)
    return dist

with connection:
    cur = connection.cursor()

    cur.execute(selection_vocabulary)

    res = cur.fetchall()

    vocabulary = {}
    candidats = {}

    mots = []
    for mot in res:
        vocabulary[mot[0]] = 0
        mots.append(mot[0])

    cur.execute(selection_noms)
    res = cur.fetchall()
    nom_candidats = []
    for nom in res:
        nom_candidats.append(nom[0])

    for nom in nom_candidats:
        candidats[nom] = {}
        for mot in mots:
            candidats[nom][mot] = 0

    cur.execute(selection_comptes)
    res = cur.fetchall()
    for row in res:
        nmc = row[0]
        vm = row[1]
        cmpt = row[2]
        candidats[nmc][vm] = cmpt

    rows = []
    for nom1 in nom_candidats:
        for nom2 in nom_candidats:
            if nom1 != nom2:
                dist = distance(candidats[nom1], candidats[nom2], mots)
                rows.append((nom1, nom2, math.ceil(dist*1000)))

    access = connection.cursor()
    access.executemany(insertion_resultats, rows)
