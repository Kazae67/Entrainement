<?php

Class BootstrapForm extends Form{

    /**
     * @param string $html | Code HTML à entourer 
     * @return string
     */
    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>"; 
    }


    /**
     * @param string $name | 
     */
    public function input($name){
        return $this->surround(
            '<label>' . $name . '</label>' . '<input type="text" name="' . $name . '" value="' .$this->getValue($name) .'" class="form-control">'); 
            // on récupérer directement le nom dans la valeur
    }

        /**
     * @return string
     */
    // Submit
    public function submit(){
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}