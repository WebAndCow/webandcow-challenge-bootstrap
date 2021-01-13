# WebAndCow Challenge PHP Bootstrap

PHP Bootstrap [pour jouer aux challenges WebAndCow](https://code-challenge.webandcow.com/)

## Cloner le projet

```shell
git clone https://github.com/WebAndCow/webandcow-challenge-bootstrap.git your-project-name
cd your-project-name
composer install
```

## Coder !

* Créer le fichier `.env` à partir du fichier .env.dist
  * `API_KEY` peut être récupéré depuis [ta page de profil](https://code-challenge.webandcow.com/achievments/visualisationAchievment)
* Ouvre ton navigateur et rends-toi sur l'accueil du projet
* Sélectionne le projet auquel tu veux participer
* Code ta solution dans la méthode `apply` du fichier `src/{CHALLENGE}/Solution.php`
* Rafraichis la page de ton navigateur pour vérifier la réponse


## Tester avec le navigateur

Tu peux tester ton résultat avec ton navigateur en local avant de l'envoyer à l'API.
Tu as juste à mettre la valeur `test` à la variable d'environnement MODE puis rafraichir la page de ton navigateur.
Tu auras maintenant un aperçu des données d'entrée qui ne changeront pas à chaque rafraichissement. Tu peux également voir le résultat attendu sur cette même page.
En modifiant la variable d'environnement TEST_DATASET_NUM (1, 2, 3 ou 4), tu peux utiliser un autre jeu de données. Si cette variable n'est pas paramétrée, on utilise le jeu de donnée 1.


## Tester avec PHPUnit

Dans chaque dossier de challenge `src/{CHALLENGE}/`, tu pourras trouver un fichier de test `SolutionTest.php`.
Tu peux créer autant de tests que tu veux dans ce fichier, mais un test est déjà présent `test_apply_solution`. Il va te permettre de tester ta fonction apply et donc vérifier que ton résultat est le même que celui attendu.
Pour exécuter les tests de ce fichier :
```shell
vendor\bin\phpunit src/{CHALLENGE}/SolutionTest.php
```


## Nouveaux challenges
Lorsque nous mettons en ligne des nouveaux challenges, il faut que tu tires la branche main pour récupérer les nouveaux dossiers associés à ces challenges :
```shell
git pull
```