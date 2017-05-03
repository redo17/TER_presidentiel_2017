# TER Presidentielles 2017
    
## Structure Laravel   
La structure Laravel est la hiérarchie de dossier du framework Laravel qui constituera le site web côté client.     
Pour le moment, 4 vues sont présentes :  
* `resources/views/master.blade.php` : la vue contenant le template de base pour la création des pages du site.   
* `resources/views/menu.blade.php` : la vue contenant le menu du site web (incluse dans _master.blade.php_).    
* `resources/views/scripts.blade.php` : la vue contenant les inclusions de scripts (incluse dans _master.blade.php_).    
* `resources/views/index.blade.php` : la vue contenant la page d'accueil du site web (basé sur _master.blade.php_).     
    
Les feuilles de style CSS (Bootstrap et autres) sont dans le dossier `public/css` et la route permettant d'accéder à la page d'accueil est dans le dossier `routes/web.php`.    
     
## Prochainement     
* Ajout du pied de page du site    
* Ajout des prochaines vues du site et leur traitement PHP préparé (page/candidat...)  
* Finalisation des scripts d'insertion en base après traitement de la brique logicielle
## Où en est le projet ?   
Nous sommes le 4 Mai au moment de cette modification. Selon le diagramme de Gantt, les tâches suivantes doivent être terminées :   
* Mise en place de la base de données
* Extraction des données avec l'API Twitter    

Ce qui est bien le cas vu que les scripts fonctionnaient, avec les tables de la BD, à la dernière réunion du 26 Avril.    
Les tâches suivantes sont en cours et doivent être réalisées **avant le 15 mai** :   
* Réalisation des scripts pour les entrées et sorties du traitement lexical
* Conception du site web objectif   

Récemment, le prof a répondu à notre mail du 26 avril.      
Une réunion est prévu vendredi pour mettre au clair tout ça.

Du côté du site web objectif, beaucoup de travail reste à faire côté visuel du point de vue de la présentation des données pour l'utilisateur.       
La page d'accueil est disponible ci-dessous.

## Page d'accueil actuelle   
![Capture de la page d'accueil](http://img15.hostingpics.net/pics/206267AccueilTER.png)
