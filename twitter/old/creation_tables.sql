#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: candidat
#------------------------------------------------------------

DROP TABLE IF EXISTS contenir;
DROP TABLE IF EXISTS resultat;
DROP TABLE IF EXISTS mot;
DROP TABLE IF EXISTS tweet;
DROP TABLE IF EXISTS candidat;

CREATE TABLE candidat(
        nom_candidat        Varchar (50) NOT NULL ,
        prenom_candidat     Varchar (255) ,
        nom_parti_candidat Varchar (255) ,
        id_twitter_candidat Int ,
        PRIMARY KEY (nom_candidat )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tweet
#------------------------------------------------------------

CREATE TABLE tweet(
        id_tweet            BigInt NOT NULL ,
        texte_tweet         Varchar (500) ,
        json_tweet          Varchar (10000) ,
        date_creation_tweet Date ,
        nom_candidat        Varchar (50) ,
        PRIMARY KEY (id_tweet )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: resultat
#------------------------------------------------------------

CREATE TABLE resultat(
        id_resultat Int NOT NULL ,
        id_tweet    BigInt ,
        PRIMARY KEY (id_resultat )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mot
#------------------------------------------------------------

CREATE TABLE mot(
        valeur_mot Varchar (50) NOT NULL ,
        PRIMARY KEY (valeur_mot )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contenir
#------------------------------------------------------------


CREATE TABLE contenir(
        id_resultat Int NOT NULL ,
        valeur_mot  Varchar (50) NOT NULL ,
        PRIMARY KEY (id_resultat ,valeur_mot )
)ENGINE=InnoDB;

ALTER TABLE tweet ADD CONSTRAINT FK_tweet_nom_candidat FOREIGN KEY (nom_candidat) REFERENCES candidat(nom_candidat);
ALTER TABLE resultat ADD CONSTRAINT FK_resultat_id_tweet FOREIGN KEY (id_tweet) REFERENCES tweet(id_tweet);
ALTER TABLE contenir ADD CONSTRAINT FK_contenir_id_resultat FOREIGN KEY (id_resultat) REFERENCES resultat(id_resultat);
ALTER TABLE contenir ADD CONSTRAINT FK_contenir_valeur_mot FOREIGN KEY (valeur_mot) REFERENCES mot(valeur_mot);
