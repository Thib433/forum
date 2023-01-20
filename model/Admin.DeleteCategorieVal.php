<?php
//on inclut les fichiers dont on a besoin
include_once("../core/databaseAction.php");
//On définit la class
class Categoriesup {
  private $nom; //on définit nos variables
  private $db;

  public function __construct($nom,$bdd_f) { //on définit la fonction construct pr construire les objets avec les variables comme paramètre
    $this->nom = htmlspecialchars($nom);
    $this->db = $bdd_f;
  }

  public function supp() { //fonction pr supprimer des catégories
    
    $this->db->query('DELETE FROM f_categories WHERE Nom = "' . $this->nom . '"');
    // Supprimer la catégorie ici
  }
}
