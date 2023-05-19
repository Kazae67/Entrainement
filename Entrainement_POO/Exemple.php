<?php
namespace Tutoriel;

// Autoloader
require 'class/Autoloader.php';
Autoloader::register();
 
$mario = new Personnage('Mario');
$luigi = new Personnage('Luigi');

$legolas = new Archer('Legolas');

// à noter que dans Archer.php parent::attaque($cible) fait 10 de dégat
$legolas->attaque($luigi); // result : 20
var_dump($mario, $luigi, $legolas);


?>