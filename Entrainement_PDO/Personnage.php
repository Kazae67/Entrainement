<?php

// Class
Class Personnage{
    public $nom;
    public $pv = 100;
    public $defense = 2;
    public $atk = 10; 

    // Constructor
    public function __construct($nom){
        $this->nom = $nom;
    }

    // Functions
    public function regenerer($pv = null){
        if(is_null($pv)){
            $this->pv = 100;
        }else{
            $this->pv += $pv;
        }
    }

    public function mort(){
        return $this->pv <= 0;
    }

    public function attaque($cible){
        $cible->pv -= $this->atk;
        // $cible = proie
        // $this = attaquant
    }
}

?>