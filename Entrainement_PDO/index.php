<?php
require 'Form.php';
require 'Text.php';


// $_POST pour que la personne qui remplie le formulaire garde ses champs remplis
// # = forme courante
$form = new Form($_POST);
?>

<form method="post" action="#">
    <?php
echo $form->input('username');
echo $form->input('password');
echo $form->submit();
    ?>
</form>

