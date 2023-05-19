<?php
namespace Tutoriel;

Class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
        // on appel soit la class 'Autoloader' ou la constante __CLASS__ (qui cherche dans la class directement)
    }

    static function autoload($class){
        if(strpos($class,__NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__. '\\', '', $class); // NAMESPACE à la place de 'Tutoriel'
            $class = str_replace('\\', '/', $class);
            require 'class/' . $class . '.php';

        }
    }
}

?>