# test_jean_pin

## Bilan Partie 1 :

Quelques difficultés pour trouver les exemples me permettant de répondre et quelques minutes necessaires pour la mise en route, mais je pense avoir tout trouvé.
Pas de test réalisé, comme conseillé dans l'énoncé

## Bilan Partie 2 :

### Environnement de développement 

VM avec Ubuntu20, mysql, PHP8.1 crée pour le test

### Tâches réalisées

- Création d'un projet Symfony
- Classe Personne créée dans src/Entity avec la commande make:entity
- Ajout de la table personne sous mysql 

CREATE TABLE personne ( id int(11) AUTO_INCREMENT, nom varchar(255), prenom varchar(255),date_de_naissance date, PRIMARY KEY (id)
);

- Création du controller ShowPersonneController - src/Controller avec la commande make:controller
- Création du template

### Diffucultés rencontrées

Gros problème de gestion du temps surtout au niveau de la partie 1
Je pense qu'il ne manque pas grand chose - 15 mins pour que tout fonctionne
Je n'ai pas pu faire la restriction d'age sur le formulaire


