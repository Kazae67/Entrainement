<?php
require "Personnage.php";

// Mario = Objet
// New = Instantiation
// Personnage = Class

// Personnage 1
$mario = new Personnage("Mario");

// Personnage 2
$luigi = new Personnage("Luigi");


// Si c'est privé, utiliser Get/Set
// Getters
$mario->setNom("Wario");

// Setters
echo $mario->getNom();




// Compétences
// $mario->regenerer();
// $luigi->regenerer();
// $mario->attaque($luigi);

// if( $luigi->mort()){
//     echo "Luigi est mort";
// }else{
//     echo "Luigi est vivant avec (" . $luigi->pv ." pv) restant";
// }


?>