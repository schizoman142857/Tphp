# Tphp
Tp sur le php réaliser a Epitech Rennes 

Description: Ce tp a pour but d'introduire tout les notions importants du php en passant par le plus simple est en allant jusqu'au plus compliquer(MVC). Ce tp introduit une comunication avec une base de donnée merci de bien avoir lancer le script SQL



Exercice 1 : Qui suis-je<br/>
Fichier à crée: Membre.php, Cible_Membre_ex1.php
Fichier Donnée: index_ex1.php

But: Votre mission si vous l'accepter est de crée la fonction "GetUserInfo", elle aura pour but de retourner les informations d'un utilisateur, elle prend en parametre une nom et prenom d'utilisateur est retourne le resultat de la requête. Cette fonction devra etre coder dans le fichier 'Membre.php'

Dans le fichier Cible_Membre_ex1.php vous devrez recupére les nom et prenom de l'utilisateur ciblé et appeler la fonction 'GetUserInfo' un rendu HTML devra etre fait(form libre).

Exercice 2: Plus on est de fous moins il y a de riz.<br/>
Fichier a ré-utilisez: Membre.php
Fichier Donnée: index_ex2.php
Fichier à crée: Cible_Membre_ex2.php

But: Dans cette exercice vous devrez ajouter un utilisateur a votre base de donnée pour cela ajouter au fichier Membre.php la fonction AddUser elle devra pendre en compte le nom et prenom. elle devra retourner un Bool qui indiquera si la requete est un succés ou non. 

le fichier Cible_Membre_ex2.php devra etre capable d'indiquer par un message si l'ajout a fonctionner, si il a marcher les informations de l'utilisateur devront etre afficher.

Exercice 3: L'erreur est humaine...<br/>
Fichier à ré-utilisez: Membre.php
Fichier Donnée: index_ex3.php
Fichier à crée: Cible_Membre_ex3.php

But: En ajout une nouvelle utilisateur de multiple erreur on était comise votre but sera de les corriger. Pour cela vous allez devoit creer dans le fichier Membre.php les fonction suivant:
  - UpdateName() elle devra prendre en compte l'ancien et le nouveau name, vous devrais par le systeme de votre choix etre informer du succés de la requête.
  - UpdatePrenom() elle devra prendre en compte l'ancien et le nouveau prenom, vous devrais par le systeme de votre choix etre informer du succés de la requête.
  - UpdateStatut elle devra pendre en compte le nom et prenom du l'utilsateur visé et aussi le numero du statut (Admin = 0, Padawan = 1, Confirmer = 2)

le Fichier Cible_Membre_ex3.php devra gérer les differentes modifications

Exercice 4: BigBrowers is watching you<br/>
Fichier à ré-utilisez: Membre.php
Fichier à crée: Cible_Membre_ex4.php

But: Avec cette exercice vous allez devoir réaliser la fonction getAllUser() qui ne prend rien en parametre est qui retourne tout les utilisateurs dans un tableau. elle devra etre ajouter au fichier Membre.php

Le Fichier Cible_Membre_ex4.php vous allez devoir affichier l'intégraliter des utilisateur, un afficher avec les balises table en html serait souhaiter. pour l'affichage foreach pourrait etre utile.

----------------------------------------------------------------------------------------------------------------------------
Un peu plus de fun avec le php
----------------------------------------------------------------------------------------------------------------------------
Pour les exercice qui suive n'esiter pas a demander de l'aide le plus régulièrement possible.


Exercice 5: un peu plus de forme<br/>
Fichier à ré-utilisez: Membre.php
Fichier à crée: Game_Membre.php

But: Transformet le fichier Membre.php en class php
Pour cela vous allez dans un premier temps anglober l'intergralité dans fonction dans le texte ci-dessous:
class Membre
{
/* Metre les fonction dedqns */
}

Nous allons maintenant ajouter les variable suivant à la class Membre: nom et prenom qui sont egaux a null par default et statut qui vaux -1 par default

Pour terminer la construction de notre class nous allons rajouter la fonction __construct qui prendra l'id du membre dans la base de donnée et qui aura pour but d'initialiser les differente variables.

Dans le fichier Game_membre.php amuserez vous avec la class Membre pour bien comprendre comment cela marche l'utilisation de Get Pouura vous être utile.

<h2>Exercice 6: Le divorce entre HTML et Php</h2><br/>
Fichier à ré-utilisez: Membre.php(ex5) + tout les autre fichier de l'exercie 1-4
Dossier Donnée: Ex_6

Dans un premier temps faite des recherche ce qu'est un template en php et sur smarty(le template presenter)
Modifier les exercices 1 à 4 en incluant les notions de séparation du php et du html et celle de l'exercice 6

Exercice 7: Silence ! I kill you<br/>
Fichier à ré-utilisez: Membre.php
fichier à crée: Admin.php

But: Pour cette exercice vous allez cree la Class Admin au sein du fichier Admin.php pour cela vous allez la faire heriter de Membre.php et ajouter la fonction DeleteUser qui prendra un nom et prenom et qui aura pour but de suprimer l'utilisateur

Exercice 8: Clara Morgan Salllllllllloppe

Faites des Recherches sur les differents CMS en php
