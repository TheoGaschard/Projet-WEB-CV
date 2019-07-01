# Dossier technique

## Objectif

L’objectif de ce projet est de créer un site internet CV. Il servira à la fois de complément d’informations du CV pour de potentiels recruteurs, mais aussi de vitrine dans laquelle je pourrais exposer mes différents projets réalisées.

## Première maquette 

Pour commencer la création du site web, j’ai avant tout créé un prototype à l’aide du logiciel Adobe XD. 
J'ai structuré ma maquette avec les caractéristiques suivantes :

* Site en sept pages : Accueille,  A propos, compétences, expériences, études, portfolio et contact.

* Un bandeau en haut de chaque page qui permet de changer de page facilement.

* Site compatible mobile avec un menu déroulant pour la version mobile.

* Couleurs : blanc, nuances de gris, noir, jaune.

## Structure du site avec HTML/CSS

Afin d’avoir les sept pages de mon site , j’ai créé sept fichiers html avec les caractéristiques suivantes :

* Une balise 'head' dans laquelle se trouve les informations sur la page tel que le titre.
  
* Une balise 'body' contenant le contenu de site et notamment une balise 'header' contenant le bandeau menu de navigation.

Le bandeau comporte des balises 'a' pour faire le lien entre les pages.
  
Certaines pages comportent des balises particulières :

* La page concernant les compétences comporte des balises 'ul' et 'li' qui servent à faire des listes.
  
* La page contact content une balise 'form' pour créer le formulaire de contact.
 
## La base de données SQL

Afin d’avoir une idée du contenu de ma futur base de données de tables qui vont la composer, j’ai utilisé le méthode MERISE. Grâce à cette méthode, nous pouvons créer des modèles conceptuels de données pour visualiser l’organisations de différentes tables de la base de données. 
Dans un premier temps, je pensais créer une table par page de mon site internet. Etant donné que les informations des pages A propos, études, expériences et portfolio ne sont pas vouées à changer fréquemment ou qu’ elles sont irrégulières, je décide de garder les tables SKILLS ( pour les compétences ), PERSO (pour la page d’accueil) et CONTACT (pour les données entrées dans le formulaire par les visiteurs du site)

## Mise en place de la base de données

Pour mettre en place la base de données, j’ai utilisé les technologies  SQL. Le langage SQL fonctionne avec un système de tables dans lesquelles on inclue les données.
J’ ai donc créé une table PERSO dans laquelle j’ai mis des informations tel que mon nom ou mon statut actuel et une table SKILLS comportant mes différents compétences et leurs taux de maitrise. J’ ai aussi créé une table CONTACT qui est vide et qui se remplira des message de visiteurs du site.
Cette base de données est hébergée en local grâce à Wamp et PHPMyAdmin.

## Passage à un site dynamique avec PHP

Grâce aux technologies PHP, nous afficher des données de la base de données directement sur le site ; cela me permet une plus grande flexibilité. Lorsque je modifie la base de données, le site s’adapte.
D’autre part , je mettre mon <header> dans un fichier que j’ai juste à ‘appeler’ quand j’en ai besoin. Cela permet une meilleur visibilité dans les fichiers.
Pour ajouter le PHP au site, tout les fichiers html deviennent des fichiers PHP.

