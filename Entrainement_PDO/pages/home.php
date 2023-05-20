<?php

/**
 * @DNS
 * Nom>Host>Username>Password
 */
$pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // renvoie l'erreur concerné, faire avant un die(var_dump(PDO::ATTR_ERRMODE));
$resultat = $pdo->query('SELECT * FROM articles'); // query retourne un PDO statement (pour ensuite utiliser un fetchAll(récupérer toutes les données))
$datas = $resultat->fetchAll(PDO::FETCH_OBJ); // fetchAll() récupère les données renvoie sous forme de tableau | FETCH_OBJ renvoie sous forme d'objet
var_dump($datas[0]->titre); 


// à désactiver pour ne pas créer un nouveau tableau
// $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') . '"'); // Exec nous renvoie un entier 
// var_dump($count);