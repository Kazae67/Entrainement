<?php
namespace Tutoriel\HTML;

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
Class Form{

    /**
     * @var array Données utilisées par le formulaire
     */
    protected $data;

    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p'; 

    /**
     * @param array $data | Données utilisées par le formulaire
     * Rend le paramètre optionnel pour que les données ne soient pas obligatoires 
     */
    public function __construct($data = array()){ 
        $this->data = $data;  
    }

    /**
     * @param string $html | Code HTML à entourer par le paragraphe 'p' assigné dans la @var $surround
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>{$html}</$this->surround}>"; 
    }

    /**
     * @param string $index | Index de la valeur à récupérer 
     * Rempli automatiquement les champs
     */
    protected function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null; 
    }

    /**
     * @param string $name | 
     */
    public function input($name){
        return $this->surround(
            '<input 
            type="text" 
            name="' . $name . '" 
            value="' .$this->getValue($name) .'">'); // on récupérer directement le nom dans la valeur
    }

    /**
     * @return string
     */
    // Submit
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}

?>