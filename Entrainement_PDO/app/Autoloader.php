<?php
namespace App;


/**
 * Class Autoloader
 * @package Tutoriel
 */
Class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
        // on appel soit la class 'Autoloader' ou la constante __CLASS__ (qui cherche dans la class directement)
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        if(strpos($class,__NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__. '\\', '', $class); // NAMESPACE à la place de 'Tutoriel'
            $class = str_replace('\\', '/', $class);
            require __DIR__ .'/' . $class . '.php'; // __DIR__ Constante qui contient le nom du dossier parent(app)

        }
    }
}

?>