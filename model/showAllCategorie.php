<?php
include_once('../core/databaseAction.php');

class ShowCategorie {
    private $db;
  
    public function __construct($bdd_f) {
            $this->db = $bdd_f;
    }
  
    public function getCategory() {
        $show = $this->db->prepare('SELECT Nom, id_cat FROM f_categories');
         $show->execute(array());    
        
        return $show;

    }
  
  }



