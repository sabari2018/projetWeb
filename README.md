# projet-web-sante
Projet en Programmation Web utilisant le framework Laravel (v.5.5)
## A propos de AlloDocdeur

AlloDocdeur est une application web permettant aux visiteurs de consulter des videos d'astuces et conseils sur la Sante et le bien-etre, en plus permettre aux abonnés de faire des tests de diagnostiques de Sante. 

## Installation et  utilisation du projet
## 1. Installation
Pour utiliser le projet il faut avoir préalablement PHP 7+ installé et **composer**

Allez dans un dossier de votre choix et tapez les commandes suivantes :
```
$ git clone https://github.com/sabari2018/projetWeb.git
$ cd projetWeb/aide_sante/
$ composer update
$ php artisan serve
```
## 2. Modification à effectuer
Mettre à jour le fichier .env en changeant les bonnes informations de connexion à la base de données.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Non_de_la_Base_de_donnees
DB_USERNAME=utilisateur
DB_PASSWORD=mot_de_passe

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=xxxxx@gmail.com
MAIL_PASSWORD=XXXXXXX
MAIL_ENCRYPTION=tls

MAILCHIMP_APIKEY=c15d0286515fb5fbb80d7e19374307f4-us4
```
Si le fichier n'existe pas, tapez la commande :

```
$ cp .env.example .env
```
Et effectuer les modifications en 2.
Pour creer la base de donnees faire :
```
$ php artisan migrate
```
Compte admin : admin@gmail.com
Mot de passe admin : 123456

## 2. Technologies utilisees
```
  1 - HTML5
  2 - CSS
  3 - JavaScript (JQuery & Ajax)
  4 - MailChimp
  ```
