<?php

Class Archer extends Personnage{

    protected $pv = 40;

    public function attaque($cible){
        $cible->pv -= 2 * $this->atk;
        $cible->empecherNegatif();
        parent::attaque($cible); 
        // $cible = proie
        // $this = attaquant
    }

}

?>