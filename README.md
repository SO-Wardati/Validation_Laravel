git clone https://github.com/SO-Wardati/Validation_Laravel.git

Dans un terminal rentrez la commande suivante
pour pouvoir manipuler le projet

- composer install

Copier et renomer le fichier suivant car sans cela le projet ne fonctionnera pas.
Et y apporter les modifications, concernant la BD, suivantes


- cp .env.example .env
{
    DB_name: bandedessinees
    userName: root
}


Faites cette commande pour faire les migrations et remplir la BD

- php artisan migrate --seed


(Pas eu le temps de finir, trop d'erreurs et peu de temps pour tout résoudre)
