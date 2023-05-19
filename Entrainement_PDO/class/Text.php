<?php

Class Text{

    private static $suffix = " €"; // Constante propre à toute la classe
    const SUFFIX = " €"; // Propre à l'instance en cours, à l'objet instancié

    // Sert à appeler  withZero si la function est en private
    public static function publicWithZero($chiffre){
        return self::withzero($chiffre); 
    // option 2 : Text::withzero($chiffre) | mais avec self on aura pas à changer le code si on change le nom de la classe (self = $this sauf qu'il fait référence au nom de la classe)
    }

    public static function withZero($chiffre){
        if($chiffre < 10){
            return '0' . $chiffre . self::SUFFIX; // Synthaxe CONST : SUFFIX | Synthaxe static ::$suffix
        }else{
            return $chiffre . self::SUFFIX;
        }
    }
}

?>