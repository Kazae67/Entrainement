<?php
require 'Personnage.php';
require 'Archer.php';

$mario = new Personnage('Mario');
$luigi = new Personnage('Luigi');

$legolas = new Archer('Legolas');

$legolas->attaque($luigi); // result : 20
$mario->attaque($luigi); // result : 10
var_dump($mario, $luigi, $legolas);


?>