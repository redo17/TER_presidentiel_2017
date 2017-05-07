# TER Presidentielles 2017
     
## Commandes utiles pour Laravel    
J'ai rencontré quelques problèmes lors de certains réglages de paramètres ou d'installation de paquets pour Laravel. En fait il ne faut pas oublier d'exéuter les commandes suivantes pour faire un peu de ménage :    
* `sudo php artisan optimize`    
* `sudo php artisan config:cache`    
* `sudo php artisan route:cache`    
    
    
## Structure Laravel   
La structure Laravel est la hiérarchie de dossier du framework Laravel qui constituera le site web côté client.     
Pour le moment, 7 vues sont présentes (sans compter le dossier "errors") :  
* `resources/views/master.blade.php` : la vue contenant le template de base pour la création des pages du site.   
* `resources/views/menu.blade.php` : la vue contenant le menu du site web (incluse dans _master.blade.php_).    
* `resources/views/scripts.blade.php` : la vue contenant les inclusions de scripts (incluse dans _master.blade.php_).    
* `resources/views/footer.blade.php` : la vue contenant le pied de page du site web (incluse dans _master.blade.php_).
* `resources/views/index.blade.php` : la vue contenant la page d'accueil du site web (basé sur _master.blade.php_).     
* `resources/views/candidat.blade.php` : la vue correspondant à un candidat sélectionné (basé sur _master.blade.php_).    
* `resources/views/resultat-recherche.blade.php` : la vue correspondant au résultat de la recherche lexicale.    
    
Les feuilles de style CSS (Bootstrap et autres) sont dans le dossier `public/css` et la route permettant d'accéder à la page d'accueil est dans le dossier `routes/web.php`.     
     
## Prochainement     
* Ajout de la vue de résultat de recherche d'un mot    
* Ajout des indicateurs (nuage de mots...) sur la vue du candidat    
* Finalisation des scripts d'insertion en base après traitement de la brique logicielle
## Où en est le projet ?   
Nous sommes le 3 Mai au moment de cette modification. Selon le diagramme de Gantt, les tâches suivantes doivent être terminées :   
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

## Quelques pages du site      
### Page d'accueil    

La page d'accueil est accessible, après installation de Laravel sur un serveur, à l'adresse :     
`http://localhost/NOM_PROJET_LARAVEL/public`
     
![Capture de la page d'accueil](http://img15.hostingpics.net/pics/206267AccueilTER.png)     

    
### Page des résultats d'une recherche    

Un exemple de ce que donner le résultat d'un mot recherché :     
     
![Capture de la page résultat de recherche](https://img4.hostingpics.net/pics/867049resultatrecherche.png)
