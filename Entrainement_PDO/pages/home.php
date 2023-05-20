<?php

$pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', '');
$count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') . '"');
var_dump($count);