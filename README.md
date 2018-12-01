# PHP Frameworks
## Application De Location de salle
### Participants au projet :
- Wilfried Atride
- Kevin Enfoux
- Gregory Norvene
- Pascal Rey
### Abstract du projet :
Création d’une application qui permettra à un client (fictif) de louer des locaux à d’autres personnes.
### Stack Technique
Pour le framework php notre choix est : Laravel.  
Pour le serveur notre choix est : Apache en container Docker  
Pour la Base de Données notre choix est : MySql  
### Répartition des tâches :
- Wilfried prépare le front.
- Gregory architecture le projet avec le framework Laravel.
- Kevin prépare le module d’authentification.
- Pascal prépare la base de données et le reporting.
### Présentation de la Base de données :
![Schema Bdd](https://github.com/Baelgar/Laravel_Group_Projet/blob/master/doc/SchemaBdd.png)
## Rapports d’activités :
### Rapport d’activité de __**Wilfried**__ :
#### Première journée :
__matin :__   Etude du cahier des charges, téléchargement des IDE, Outils de développement, Docker et autre…  
__Après-midi :__ Poursuite des téléchargements, Design du layout  
#### Deuxième journée :
__Matin :__  Mise en place de la gestion des salles  
__Après-midi :__ Design des pages de recherche de salles, design des pages resultat de la recherche
#### Troisième journée :
__Matin :__ Mise en place de la partie frontend  
__Après-midi :__   Amélioration de l'interface  
#### Dernière demi-journée :
Debug et vérification de la partie frontend  

### Rapport d’activité de __**Kevin**__ :
#### Première journée :
__matin :__  Etude du cahier des charges, téléchargement des IDE, Outils de développement, Docker et autre…  
__Après-midi :__ Poursuite des téléchargements,  Création du schéma de la base de données,  
#### Deuxième journée :
__Matin :__  Mise en place de la gestion des comptes utilisateurs  
__Après-midi :__ deploiement de la solution d'authentification Laravel  
#### Troisième journée :
__Matin :__ Creation de la liste des réservations  
__Après-midi :__ Génération pdf des factures.  
#### Dernière demi-journée :
Debug de la génération pdf et autre.  

### Rapport d’activité de __**Gregory**__ :
#### Première journée :
__matin :__   Etude du cahier des charges, téléchargement des IDE, Outils de développement, Docker et autre…  
__Après-midi :__ Poursuite des téléchargements,  Mise en place des outils de développements Docker, ecriture des fichiers de config...    
#### Deuxième journée :
__Matin :__  Mise en place des Middleware  
__Après-midi :__ Mise en place de la gestion de l'admin
Géneration  de  fausse  données via  le seeder (2 utilisateurs , 4 forfaits et4 modules)  
#### Troisième journée :
__Matin :__ Intégration de la partie authentification  
__Après-midi :__ Integration des différentes pages et vérification du bon fonctionnement  
#### Dernière demi-journée :
Debug et verification du bon fonctionnement de l'application  

### Rapport d’activité de __**Pascal**__ :
#### Première journée :
__matin :__  Etude du cahier des charges, téléchargement des IDE, Outils de développement, Docker et autre…  
__Après-midi :__
Poursuite des téléchargements,  
Création du schéma de la base de données,  
Recherche d’information sur les lib d’impression de pdf  

#### Deuxième journée :
__Matin :__  Installation docker, Installation vagrant, pour test projet d’impression pdf.  
__Après-midi :__  
Modification de la base de données (adaptation des tables à notre besoin)   
remplissage de la base de données : users, salles, réservation...  
Mock des pages : search...  
#### Troisième journée :
__Matin :__ Cours php.  
__Après-midi :__ Prise en main du projet Laravel, analyse de la structure du projet, pour faire des modifications sur la page search.blade.php, tentative d’ajout de css...  
#### Dernière demi-journée :
Ecriture du readme,  reporting de l'activité de chacun, préparation de la présentation.  
