# Description

Ce dépôt est utilisé comme base de développement pour le test de compétences sur le framework Laravel. **Il n'y a uniquement dans celui-ci, qu'une installation récente de Laravel 5.5.** Ce test à une durée d'environ une heure. Toute les fonctionnalités non demandées présentes seront valorisées.  

# Test

## Contexte
A ce jour, le client utilise un fichier excel pour rédiger des bons de commande (voir format ci-dessous). Bien qu'efficace, le partage entre les différents pôles de la société est compliqué et donne lieu à des problèmes de suivi. Le but est donc de proposer un outil simple d'utilisation pour la consultation des bons de commande.

`Fichier excel d'un bon de commande`

| Numéro | Désignation                            | Date de création | État     |
| :----: |:---------------------------------------| :----------------| :--------|
| 1      | Développement spécifique JOHN DOE       | 04/01/2017       | En cours |

Mise en place d'une solution web afin de permettre le partage des bons de commande au sein de l'entreprise.

| Désignation   | Qté | PU         |
| ------------- |:---:| ----------:|
| Ingenierie    | 5h  | 1000,00€   |
| Main d'oeuvre | 20h | 300,00€    |
| Autres        | 1   | 120,00€    |
|               |     | 11 120,00€ |

## Résultat attendu
- Une page listant les bons de commande
- Une page permettant la consultation de ces derniers
- Une sécurisation simple de l'application par un système de connexion

## Instructions / Informations utiles
- Créer un fork du dépôt et récupérer celui-ci dans le dossier local `/var/www` avec comme nom de dossier `job`
- Accéder à l'application via l'url [localhost/job/public](http://localhost/job/public)
- Insérer des données de test dans la base de données afin de pouvoir vérifier le bon fonctionnement des pages demandées
- Utiliser au mieux le système de versionnement
- Identifiants Mysql : root/root
- Accès phpMyAdmin : [localhost/pma](http://localhost/pma)
- A la fin du test, proposer vos travaux via un pull request

