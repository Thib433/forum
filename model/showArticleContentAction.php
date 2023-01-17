<?php

include_once('../core/databaseAction.php');


class ShowA{
    private $db;
    private $idOfTheQuestion;

    public function __construct($db, $idOfTheQuestion){
        $this->db = $db;
        $this->idOfTheQuestion = $idOfTheQuestion;
    }

    public function SelectQuestion(){
        $recup=$this->db->prepare('SELECT id, titre, contenu, pseudo_auteur, date_publication FROM questions WHERE id = ?');
        $recup->execute(array($this->idOfTheQuestion));
        return $recup;
    }
}