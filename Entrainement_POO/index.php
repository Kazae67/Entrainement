<?php
// Terminé !
// On a plus à utiliser manuellement les namespaces dans Autoloader Ex : \Tutoriel\Autoloader::register() ou \Tutoriel\HTML\BootstrapForm() mais juste Autoloader::register();
use \Tutoriel\HTML\BootstrapForm;
use \Tutoriel\Autoloader;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <?php
    // Autoloader
    require 'class/Autoloader.php';
    Autoloader::register();
 
  
    // $_POST pour que la personne qui remplie le formulaire garde ses champs remplis
    $form = new BootstrapForm($_POST);
    ?>
    
    <form method="post" action="#">
        <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
        ?>
    </form>

</body>
</html>





