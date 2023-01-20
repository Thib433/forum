<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
//On définit la class
class Question {
  //on définit la variable
    private $db;
  
    public function __construct($bdd_f) { //on définit la fonction construct pr construire les objets avec la variable comme paramètre
            $this->db = $bdd_f;
    }
  
    public function selectByCategory($id_cat) { //fonction pr chercher les données de la table questions pr les afficher
      $stmt = $this->db->prepare('SELECT id, titre, objet, contenu, pseudo_auteur, date_publication FROM questions WHERE objet = ? ORDER BY id DESC');
      $stmt->execute(array($id_cat)); //on execute
            return $stmt;    
    }

  }


?>