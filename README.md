# Tphp
Tp sur le php réaliser à Epitech Rennes 

<strong>Description:</strong> Ce tp a pour but d'introduire toutes les notions importantes du php en passant par le plus simple est en allant jusqu'au plus compliquer (MVC). Ce tp introduit une communication avec une base de données merci de bien avoir lancé le script SQL

<h2>Exercice 1 : Qui suis-je</h2><br/>
<strong>Fichier à crée:</strong> Membre.php, Cible_Membre_ex1.php<br/>
<strong>Fichier Donnée:</strong> index_ex1.php, user.sql

<strong>But:</strong> Votre mission si vous l'acceptez est de créer la fonction '<strong>GetUserInfo</strong>', elle aura pour but de retourner les informations d'un utilisateur, elle prend en paramètre un nom et prénom d'utilisateur et retourner le résultat de la requête. Cette fonction devra être codé dans le fichier '<strong>Membre.php</strong>'

Dans le fichier '<strong>Cible_Membre_ex1.php</strong>' vous devrez récupéré les noms et prénom de l'utilisateur cibles et appeler la fonction '<strong>GetUserInfo</strong>' un rendu HTML devra être fait (forme libre).

<h2>Exercice 2: Plus on est de fous moins il y a de riz.</h2><br/>
</strong>Fichier a ré-utilisez:</stron> Membre.php<br/>
</strong>Fichier Donnée:</stron> index_ex2.php<br/>
</strong>Fichier à crée:</stron> Cible_Membre_ex2.php<br/>

<strong>But:</strong> Dans cet exercice vous devrez ajouter un utilisateur a votre base de données pour cela ajouter au fichier '<strong>Membre.php</strong>'  la fonction '<strong>AddUser</strong>' elle devra pendre en compte le nom et prénom. elle devra retourner un Bool qui indiquera si la requête est un succés ou non.

le fichier '<strong>Cible_Membre_ex2.php</strong>' devra être capable d'indiquer par un message si l'ajout a fonctionner, s'il a marché les informations de l'utilisateur devrons être affiché.

<h2>Exercice 3: L'erreur est humaine...</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php<br/>
<strong>Fichier Donnée:</strong> index_ex3.php<br/>
<strong>Fichier à crée:</strong> Cible_Membre_ex3.php<br/>

<strong>But:</strong> En ajoutant un nouvel utilisateur de multiple erreurs ont été commise votre but sera de les corriger. Pour cela vous allez devoir créer dans le fichier 'Membre.php' les fonctions suivantes:
 - <strong>UpdateName:</strong> elle devra prendre en compte l'ancien et le nouveau nom, vous devrez par le système de votre choix être informé du sucés de la requête. 
 - <strong>UpdatePrenom:</strong> elle devra prendre en compte l'ancien et le nouveau prénom, vous devrez par le système de votre choix être informé du sucés de la requête. 
 - <strong>UpdateStatut:</strong> elle devra pendre en compte le nom et prénom de l'utilisateur visé et aussi le numéro du statut (Admin = 0, Padawan = 1, Confirmer = 2)

le Fichier '<strong>Cible_Membre_ex3.php</strong>' devra gérer les différentes modifications

<h2>Exercice 4: BigBrowers is watching you</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php<br/>
<strong>Fichier à crée:</strong> index_membre_ex4.php<br/>

<strong>But:</strong> Avec cet exercice vous allez devoir réaliser la fonction '<strong>getAllUser</strong>' qui ne prend rien en paramètre est qui retourne tous les utilisateurs dans un tableau. elle devra être ajouté au fichier '<strong>Membre.php</strong>'

Le Fichier '<strong>index_membre_ex4.php</strong>' vous allez devoir afficher l'intégralité des utilisateurs, un affichage avec les balises tables en html serait souhaité. pour l'affichage foreach pourrait être utile.

<h1>Un peu plus de fun avec le php</h1>

<h4>Pour les exercice qui suive n'hesitez pas a demander de l'aide le plus régulièrement possible.</h4>


<h2>Exercice 5: un peu plus de forme</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php<br/>
<strong>Fichier à crée:</strong> Game_Membre.php<br/>

<strong>But:</strong> Transformer le fichier '<strong>Membre.php</strong>'  en classe php. Pour cela vous allez dans un premier temps englober l'intégralité des fonctions dans le texte ci-dessous:<br/>
<em>class Membre{<br/>/* Metre les fonctions dedans */<br/>}<br/></em>

Nous allons maintenant ajouter les variables suivantes à la classe Membre: nom et prénom qui sont égal à null par défaut et statut qui vaut -1 par défaut. Pour terminer la construction de notre classe nous allons rajouter la fonction '<strong>__construct</strong>' qui prendra l'id du membre dans la base de données et qui aura pour but d'initialiser les différentes variables. Certaine fonction des exercices précédents peuvent donc subir quelque modification.

Dans le fichier '<strong>Game_membre.php</strong>' amusez-vous avec la classe Membre pour bien comprendre comment cela marche, l'utilisation de Get Poura vous être utile.

<h2>Exercice 6: Le divorce entre HTML et Php</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php(ex5) + tout les autres fichiers de l'exercie 1-4<br/>
<strong>Dossier Donnée:</strong> Ex_6<br/>

Dans un premier temps  recherche ce qu'est un template en php et sur smarty (le template présenté dans ce tp) Modifier les exercices 1 à 4 en incluant les notions de séparation du php et du html et celle de l'exercice précédent.

<h2>Exercice 7: Silence ! I kill you</h2><br/>
<strong>Fichier à ré-utilisez:</strong> Membre.php</br>
<strong>fichier à crée:</strong> Admin.php</br>

<strong>But:</strong> Pour cet exercice vous allez créer la Classe Admin au sein du fichier 'Admin.php' pour cela vous allez la faire hériter de 'Membre.php' et ajouter la fonction 'DeleteUser' qui prendra un nom et prénom et qui aura pour but de supprimer l'utilisateur
<h2>Exercice 8: Clara Morgan Salllllllllloppe</h2><br/>

Faites des Recherches sur les différents CMS en php.
