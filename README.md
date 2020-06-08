# Projet Laravel de Rémi Moncorgé


## Installation 
#### 1/ Cloner le repository 

git clone https://github.com/remimoncorge/blog_laravel.git

#### 2/  Changer les chemins 

 - `DB_DATABASE` dans le fichier .env
 - `$directory` ligne 50 dans le fichier /public/phpliteadmin.php



#### 3) A la racine du dossier, lancez les commandes suivantes : 

 -  ```composer install```
 -  ```php artisan serve```


#### 4) URL blog

Le blog est accessible à l'url suivante : http://localhost:8000/


#### 5) Login utiles

Afin d'avoir accès au CRUD, se connecter avec les identifiants suivant : 

utilisateur : admin@admin.com
mot de passe : admin



## Compte rendu

- Page d'acceuil présentant les 3 articles les plus récents

- Page articles affichant tous les articles, leur date de parution et leur auteur, du plus récent au plus vieux

Sur ces deux pages les noms des articles sont cliquables et amène à la vue complète de l'article avec titre, auteur, contenu, photo, date et commentaires. 

- Affichage des commentaires d'un article et ajout de commentaires

- Page contact qui permet d'envoyer un message

- Footer avec un lien cliquable pour envoyer un mail

- Connexion avec identifiants pour accéder à un CRUD

- Une fois connecté, accès à l'édition, la suppression et la création des posts

- Ajout de photos sur les articles à partir d'url (générer avec Faker, images prises sur le site https://lorempixel.com/, chargement parfois long. Possibilité d'ajouter des photos également lors de la création d'un article en renseignant l'url de l'image




