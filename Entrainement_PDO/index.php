<?php
require "Personnage.php";

// Mario = Objet
// New = Instantiation
// Personnage = Class

// Personnage 1
$mario = new Personnage("Mario");
$mario->atk = 100;

// Personnage 2
$luigi = new Personnage("Luigi");

// Compétences
$mario->regenerer();
$luigi->regenerer();
$mario->attaque($luigi);

if($luigi->mort()){
    echo "Luigi est mort";
}else{
    echo "Luigi est vivant avec (" . $luigi->pv ." pv) restant";
}

// Affichage
var_dump($mario);
var_dump($luigi);

?>