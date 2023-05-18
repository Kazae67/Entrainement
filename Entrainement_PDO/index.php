<?php
require 'Form.php';
require 'Text.php';
require 'Personnage.php';

// $_POST pour que la personne qui remplie le formulaire garde ses champs remplis
$form = new Form($_POST);

// Text
var_dump(Text::publicwithZero(9));


// Personnage 1
$mario = new Personnage('Mario');
$mario->regenerer();
// Personnage 2
$luigi = new Personnage('Luigi');

var_dump($mario);
var_dump($luigi);

// Form
?>

<form method="post" action="#">
    <?php
echo $form->input('username');
echo $form->input('password');
echo $form->submit();
    ?>
</form>

