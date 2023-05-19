<?php

// Class
Class Personnage{

    protected static $maxVie = 300; // Propre à toute la classe 
    const MAX_VIE = 250; // Propre à l'instance en cours, à l'objet instancié

    protected $nom; // protected : peut entrer seulement depuis la classe, utiliser "Get" pour récupérer
    protected $pv = 100;
    protected $defense = 2;
    protected $atk = 10; 

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
    
    // cette fonction n'a pas besoin d'être regardé depuis l'extérieur alors on l'a met en protected
    protected function empecherNegatif(){ 
        if($this ->pv <0){
            $this->pv = 0;
        }

    }

    public function attaque($cible){
        $cible->pv -= $this->atk;
        $cible->empecherNegatif();
        // proie.pv -= attaquant.atk
        // $cible = proie
        // $this = attaquant
    }
}

?>