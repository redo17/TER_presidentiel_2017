
DROP TABLE IF EXISTS resultat_distance;
DROP TABLE IF EXISTS resultat_mot;
DROP TABLE IF EXISTS contenir;
DROP TABLE IF EXISTS mot;
DROP TABLE IF EXISTS tweet;
DROP TABLE IF EXISTS candidat;


CREATE TABLE candidat(
        nom_candidat        Varchar (50) NOT NULL ,
        prenom_candidat     Varchar (255) ,
        nom_parti_candidat  Varchar (255) ,
        id_twitter_candidat Int ,
        PRIMARY KEY (nom_candidat )
)ENGINE=InnoDB;


CREATE TABLE tweet(
        id_tweet            BigInt NOT NULL ,
        texte_tweet         Varchar (500) ,
        date_creation_tweet Date ,
        retweets_tweet      Int,
        nom_candidat        Varchar (50) ,
        PRIMARY KEY (id_tweet ),
        FOREIGN KEY (nom_candidat)
            REFERENCES candidat(nom_candidat)
)ENGINE=InnoDB;

CREATE TABLE mot(
        valeur_mot          Varchar (50) NOT NULL ,
        nature_mot          Varchar(5) NOT NULL,
        PRIMARY KEY (valeur_mot )
)ENGINE=InnoDB;

CREATE TABLE contenir(
        id_tweet            BigInt NOT NULL ,
        valeur_mot          Varchar (50) NOT NULL ,
        occurences_contenir Int,
        PRIMARY KEY (id_tweet ,valeur_mot ),
        FOREIGN KEY (id_tweet)
            REFERENCES tweet(id_tweet),
        FOREIGN KEY (valeur_mot)
            REFERENCES mot(valeur_mot)
)ENGINE=InnoDB;

CREATE TABLE resultat_mot(
        nom_candidat        Varchar (50) NOT NULL,
        valeur_mot          Varchar (50) NOT NULL,
        compte_resultat     Int,
        PRIMARY KEY (nom_candidat, valeur_mot),
        FOREIGN KEY (nom_candidat)
            REFERENCES candidat(nom_candidat),
        FOREIGN KEY (valeur_mot)
            REFERENCES mot(valeur_mot)
)ENGINE=InnoDB;

CREATE TABLE resultat_distance(
    nom_candidat1           Varchar (50) NOT NULL,
    nom_candidat2           Varchar (50) NOT NULL,
    distance_candidats      Int,
    PRIMARY KEY (nom_candidat1, nom_candidat2),
    FOREIGN KEY (nom_candidat1)
        REFERENCES candidat(nom_candidat),
    FOREIGN KEY (nom_candidat2)
        REFERENCES candidat(nom_candidat)
)ENGINE=InnoDB;
