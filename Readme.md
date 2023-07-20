Étape 1 : Connexion au SGBD
Ouvrir son client MySQL ou tout autre outil de gestion de base de et à se connecter à son serveur MySQL en utilisant les informations de connexion (nom d'hôte, nom d'utilisateur et mot de passe) les informations de connexion utilisée dans ce projet sont :("sql305.infinityfree.com", "if0_34628502", "N1yO6C5MqIst") 

Étape 2 : Création de la base de données
Dans l'outil de gestion de base de données, il faut exécuter le script SQL pour créer la base de données. Le script commence par créer la base de données avec le nom if0_34628502_database1. Si cette base de données existe déjà, elle sera utilisée, sinon elle sera créée.

Étape 3 : Exécution du script SQL
Il faut maintenant exécuter le reste du script SQL qui contient la structure des tables et les données d'exemple. Cela créera toutes les tables et insérera les enregistrements d'exemple dans les tables avis, cars, horaires, LoginDetails, Messages et services (Attention aux majuscules).


Étape 4 : Changement des informations de connexion
Pour garder le bon fonctionnement du coté back end il faut renommer les identifiants dans le fichier connection_db.php dans la déclaration des variables, et attribuer à chacune les valeurs appropriés $host (adresse du serveur), $username (utilisateur), $password (mot de passe), $database(nom de la base de données)

A noter : compte Admin du  site (email : vparrot@garage.fr  // mot de passe :  vparrot)
