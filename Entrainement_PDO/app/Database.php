<?php

namespace App;
use \PDO;

Class Database{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost'){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;

    }

    // Empêche qu'il fasse plusieurs fois la connexion si elle est déjà co
    private function getPDO(){
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // renvoie l'erreur concerné, faire avant un die(var_dump(PDO::ATTR_ERRMODE));
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $class_name){
        $req = $this->getPDO()->query($statement); // query retourne un PDO statement (pour ensuite utiliser un fetchAll(récupérer toutes les données));
        $datas = $req->fetchAll(PDO::FETCH_CLASS, '\\' . $class_name); // fetchAll() récupère les données renvoie sous forme de tableau | FETCH_OBJ renvoie sous forme d'objet
        return $datas;
    }

    
}