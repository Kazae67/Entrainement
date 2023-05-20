<?php

/**
 * @DNS
 * Nom>Host>Username>Password
 */
$pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // renvoie l'erreur concerné, faire avant un die(var_dump(PDO::ATTR_ERRMODE));
$resultat = $pdo->query('SELECT * FROM articles'); // query retourne un PDO statement (pour ensuite utiliser un fetchAll(récupérer toutes les données))
var_dump($resultat->fetchAll()); // fetchAll() récupère toutes les données et nous renvoie sous forme de tableau

$count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') . '"'); // Exec nous renvoie un entier
var_dump($count);