# Tphp
Tp sur le php réaliser a Epitech Rennes 

<strong>Description:</strong> Ce tp a pour but d'introduire tout les notions importants du php en passant par le plus simple est en allant jusqu'au plus compliquer(MVC). Ce tp introduit une comunication avec une base de donnée merci de bien avoir lancer le script SQL

<h2>Exercice 1 : Qui suis-je</h2><br/>
<strong>Fichier à crée:</strong> Membre.php, Cible_Membre_ex1.php<br/>
<strong>Fichier Donnée:</strong> index_ex1.php

<strong>But:</strong> Votre mission si vous l'accepter est de crée la fonction "GetUserInfo", elle aura pour but de retourner les informations d'un utilisateur, elle prend en parametre une nom et prenom d'utilisateur est retourne le resultat de la requête. Cette fonction devra etre coder dans le fichier '<strong>Membre.php</strong>'

Dans le fichier Cible_Membre_ex1.php vous devrez recupére les nom et prenom de l'utilisateur ciblé et appeler la fonction '<strong>GetUserInfo</strong>' un rendu HTML devra etre fait(form libre).

<h2>Exercice 2: Plus on est de fous moins il y a de riz.</h2><br/>
</strong>Fichier a ré-utilisez:</stron> Membre.php<br/>
</strong>Fichier Donnée:</stron> index_ex2.php<br/>
</strong>Fichier à crée:</stron> Cible_Membre_ex2.php<br/>

<strong>But:</strong> Dans cette exercice vous devrez ajouter un utilisateur a votre base de donnée pour cela ajouter au fichier Membre.php la fonction '<strong>AddUser</strong>' elle devra pendre en compte le nom et prenom. elle devra retourner un Bool qui indiquera si la requete est un succés ou non. 

le fichier Cible_Membre_ex2.php devra etre capable d'indiquer par un message si l'ajout a fonctionner, si il a marcher les informations de l'utilisateur devront etre afficher.

<h2>Exercice 3: L'erreur est humaine...</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php<br/>
<strong>Fichier Donnée:</strong> index_ex3.php<br/>
<strong>Fichier à crée:</strong> Cible_Membre_ex3.php<br/>

<strong>But:</strong> En ajout une nouvelle utilisateur de multiple erreur on était comise votre but sera de les corriger. Pour cela vous allez devoit creer dans le fichier '<strong>Membre.php</strong>' les fonction suivant:
  - <strong>UpdateName:</strong> elle devra prendre en compte l'ancien et le nouveau name, vous devrais par le systeme de votre choix etre informer du succés de la requête.
  - <strong>UpdatePrenom:</strong> elle devra prendre en compte l'ancien et le nouveau prenom, vous devrais par le systeme de votre choix etre informer du succés de la requête.
  - <strong>UpdateStatut:</strong> elle devra pendre en compte le nom et prenom du l'utilsateur visé et aussi le numero du statut (Admin = 0, Padawan = 1, Confirmer = 2)

le Fichier Cible_Membre_ex3.php devra gérer les differentes modifications

<h2>Exercice 4: BigBrowers is watching you</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php<br/>
<strong>Fichier à crée:</strong> Cible_Membre_ex4.php<br/>

<strong>But:</strong>trong> Avec cette exercice vous allez devoir réaliser la fonction '<strong>getAllUser</strong>' qui ne prend rien en parametre est qui retourne tout les utilisateurs dans un tableau. elle devra etre ajouter au fichier '<strong>Membre.php</strong>'

Le Fichier Cible_Membre_ex4.php vous allez devoir affichier l'intégraliter des utilisateur, un afficher avec les balises table en html serait souhaiter. pour l'affichage foreach pourrait etre utile.

<h1>Un peu plus de fun avec le php</h1>

<h4>Pour les exercice qui suive n'esiter pas a demander de l'aide le plus régulièrement possible.</h4>


<h2>Exercice 5: un peu plus de forme</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php<br/>
<strong>Fichier à crée:</strong> Game_Membre.php<br/>

<strong>But: </strong> Transformet le fichier Membre.php en class php
Pour cela vous allez dans un premier temps anglober l'intergralité dans fonction dans le texte ci-dessous:
<em>class Membre
{
/* Metre les fonction dedqns */
}</em>

Nous allons maintenant ajouter les variable suivant à la class Membre: nom et prenom qui sont egaux a null par default et statut qui vaux -1 par default

Pour terminer la construction de notre class nous allons rajouter la fonction '<strong>__construct</strong>' qui prendra l'id du membre dans la base de donnée et qui aura pour but d'initialiser les differente variables.

Dans le fichier Game_membre.php amuserez vous avec la class Membre pour bien comprendre comment cela marche l'utilisation de Get Pouura vous être utile.

<h2>Exercice 6: Le divorce entre HTML et Php</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php(ex5) + tout les autre fichier de l'exercie 1-4<br/>
<strong>Dossier Donnée:</strong> Ex_6<br/>

Dans un premier temps faite des recherche ce qu'est un template en php et sur smarty(le template presenter)
Modifier les exercices 1 à 4 en incluant les notions de séparation du php et du html et celle de l'exercice 6

<h2>Exercice 7: Silence ! I kill you</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php</br>
<strong>fichier à crée:</strong> Admin.php</br>

<strong>But:</strong> Pour cette exercice vous allez cree la Class Admin au sein du fichier '<strong>Admin.php</strong>' pour cela vous allez la faire heriter de '<strong>Membre.php</strong>' et ajouter la fonction '<strong>DeleteUser</strong>' qui prendra un nom et prenom et qui aura pour but de suprimer l'utilisateur

<h2>Exercice 8: Clara Morgan Salllllllllloppe</h2><br/>

Faites des Recherches sur les differents CMS en php
