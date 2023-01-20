<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');

//On définit la class
class ShowA{
    //on définit les variables
    private $db;
    private $idOfTheQuestion;

    public function __construct($db, $idOfTheQuestion){ //on définit la fonction construct pr construire les objets avec les variables comme paramètre
        $this->db = $db;
        $this->idOfTheQuestion = $idOfTheQuestion;
    }

    public function SelectQuestion(){ //fonction pr chercher les données de la table reponse pr les afficher
        $recup=$this->db->prepare('SELECT id, titre, contenu, pseudo_auteur, date_publication FROM questions WHERE id = ?');
        $recup->execute(array($this->idOfTheQuestion)); //on execute
        return $recup;
    }
}