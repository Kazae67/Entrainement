<?php

// Class
Class Personnage{

    private static $maxVie = 300; // Propre à toute la classe 
    const MAX_VIE = 250; // Propre à l'instance en cours, à l'objet instancié

    private $nom; // private : peut entrer seulement depuis la classe, utiliser "Get" pour récupérer
    private $pv = 100;
    private $defense = 2;
    private $atk = 10; 

    // Constructor
    public function __construct($nom){
        $this->nom = $nom;
    }

    // Setters
    public function setNom($nom){ // Le nom est en privé, utiliser "$objet->getNom";
        $this->nom = $nom;
    }

    // Getters
    public function getNom(){
        return $this->nom;
    }
    public function getPv(){
        return $this->pv;
    }
    public function getDefense(){
        return $this->defense;
    }
    public function getAtk(){
        return $this->atk;
    }

    // Functions
    public function regenerer($pv = null){
        if(is_null($pv)){
            $this->pv = self::MAX_VIE;  // synthaxe CONST : self::MAX_VIE | synthaxe static ::$maxVie
        }else{
            $this->pv += $pv;
        }
    }
    
    public function mort(){
        return $this->pv <= 0;
    }
    
    // cette fonction n'a pas besoin d'être regardé depuis l'extérieur alors on l'a met en private
    private function empecherNegatif(){ 
        if($this ->pv <0){
            $this->pv = 0;
        }

    }

    public function attaque($cible){
        $cible->pv -= $this->atk;
        $cible->empecherNegatif();
        // $cible = proie
        // $this = attaquant
    }
}

?>