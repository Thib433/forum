<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
//On définit la class
class ShowCategorie {
      //on définit la variable
    private $db;
  
    public function __construct($bdd_f) { //on définit la fonction construct pr construire les objets avec la variable comme paramètre
            $this->db = $bdd_f;
    }
  
    public function getCategory() { //fonction pr chercher l'id de la catégorie et son nom de la table f_catégories pr les afficher
        $show = $this->db->prepare('SELECT Nom, id_cat FROM f_categories');
         $show->execute(array());     //on execute
        
        return $show;

    }
  
  }



