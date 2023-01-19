<?php
include_once('../core/databaseAction.php');

class Question {
    private $db;
  
    public function __construct($bdd_f) {
            $this->db = $bdd_f;
    }
  
    public function selectByCategory($id_cat) {
      $stmt = $this->db->prepare('SELECT id, titre, objet, contenu, pseudo_auteur, date_publication FROM questions WHERE objet = ? ORDER BY id DESC');
      $stmt->execute(array($id_cat));
            return $stmt;    
    }

  }


?>