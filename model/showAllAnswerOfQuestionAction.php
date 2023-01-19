<?php

include_once('../core/databaseAction.php');

class GetAnswer {
    private $db;
  
    public function __construct($bdd_f) {
            $this->db = $bdd_f;
    }
  
    public function selectByQuestions($id) {
        $stmt2 = $this->db->prepare('SELECT id_q, date_publication_r, contenu_r, pseudo_auteur_r from reponse where id_q = ? order by id desc');
        $stmt2->execute(array($id));
            return $stmt2;
    }
  
  }


?>