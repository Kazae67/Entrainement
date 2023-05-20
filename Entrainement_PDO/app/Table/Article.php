<?php

namespace App\Table;

class Article{

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$method();
  
    }
    
    public function getUrl(){
        return 'index.php?p=article&id=' . $this->id;
    }

    // Voir la suite
    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0 ,100) . '...</p>'; // substr() prend les 100 premiers caractères
        $html .= '<p><a href="' . $this->getUrl() .'">Voir la suite</a></p>';
        return $html;
    }
}