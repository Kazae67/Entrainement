<?php

namespace Tutoriel;
Class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
        // on appel soit la class 'Autoloader' ou la constante __CLASS__ (qui cherche dans la class directement)
    }

    static function autoload($class){
        $class = str_replace('Tutoriel\\', '', $class);
        $class = str_replace('\\', '/', $class);
        
        require 'class/' . $class . '.php';
    }
}

?>