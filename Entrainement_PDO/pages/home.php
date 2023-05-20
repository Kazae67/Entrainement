<?php

require_once '../app/Database.php';
$db = new App\Database('blog');
$datas = $db->query('SELECT * FROM articles');
var_dump($datas); 


// à désactiver pour ne pas créer un nouveau tableau
// $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') . '"'); // Exec nous renvoie un entier 
// var_dump($count);