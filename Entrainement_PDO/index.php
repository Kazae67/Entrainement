<?php
require 'Form.php';
require 'Text.php';
require 'Personnage.php';

// $_POST pour que la personne qui remplie le formulaire garde ses champs remplis
$form = new Form($_POST);

var_dump(Text::publicwithZero(9));

$mario = new Personnage('Mario');
$mario->regenerer();

$luigi = new Personnage('Luigi');

var_dump($mario);
var_dump($luigi);

?>

<form method="post" action="#">
    <?php
echo $form->input('username');
echo $form->input('password');
echo $form->submit();
    ?>
</form>

