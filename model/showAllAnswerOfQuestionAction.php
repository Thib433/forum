<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
//On définit la class
class GetAnswer {
  //on définit la variable
    private $db;
  
    public function __construct($bdd_f) { //on définit la fonction construct pr construire les objets avec la variable comme paramètre
            $this->db = $bdd_f;
    }
  
    public function selectByQuestions($id) { //fonction pr chercher les données de la table reponse pr les afficher
        $stmt2 = $this->db->prepare('SELECT id_q, date_publication_r, contenu_r, pseudo_auteur_r from reponse where id_q = ? order by id desc');
        $stmt2->execute(array($id)); //on execute
            return $stmt2;
    }
  
  }


?>