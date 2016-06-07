par_symfony_2
=============

A Symfony project created on March 24, 2016, 5:13 pm.

==============


Pour utiliser mysql, 
Démarrer le serveur mysql 
```bash
sudo service mysql start
```

Créer la base et importer le fichier cassiopeesa/WebASR/symfony.sql dans phpMyAdmin. 
```bash
sudo mysqladmin -u root -p create SondageAnciens
sudo mysql -u root -p -D SondageAnciens <../SondageAnciens.sql

mots de pass: 19931115
```


```bash
php bin/console server:run
```







