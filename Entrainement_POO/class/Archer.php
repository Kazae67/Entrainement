<?php
namespace Tutoriel;

// Archer hérite des paramètres de la class Personnage
Class Archer extends Personnage{

    // On cherche le nom, et on lui défini ses pv / 2
    // Puis on apppelle le parent pour cibler
    public function __construct($nom){
        $this->pv = $this->pv / 2;
        parent::__construct($nom);
    }

    public function attaque($cible){
        $cible->pv -= 2 * $this->atk; // 10atk * 2 = 20

        parent::attaque($cible); // (10atk * 2) + 10 = 30
        // proie.pv -= attaquant.atk
        // $cible = proie
        // $this = attaquant
        // on appelle les parents de l'héritage [Personnage.php] qui lui vas utiliser les valeurs de son ATK
    }

}

?>