<?php

// CLASS
Class Form{
    private $data;
    public $surround = 'p'; // construit le paragraphe <p></p>

    // CONSTRUCTOR
    public function __construct($data = array()){ // = array rend le paramètre optionnel pour que les données soit pas obligatoires 
        $this->data = $data;  
    }

    // GETTERS
    // Rempli automatiquement les champs
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null; // on pas [index] dans le tableau $this->data[$index]
    }

    // FUNCTIONS
    // On demande à la function d'entourer $html par le paragraphe 'p' assigné dans $surround
    private function surround($html){
        return "<{$this->surround}>{$html}</$this->surround}>"; 
    }

    // Input
    public function input($name){
        return $this->surround(
            '<input 
            type="text" 
            name="' . $name . '" 
            value="' .$this->getValue($name) .'">'); // on récupérer directement le nom dans la valeur
    }

    // Submit
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}

?>