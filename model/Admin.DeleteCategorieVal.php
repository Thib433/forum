<?php
include_once("../core/databaseAction.php");

class Categoriesup {
  private $nom;
  private $db;

  public function __construct($nom,$bdd_f) {
    $this->nom = htmlspecialchars($nom);
    $this->db = $bdd_f;
  }

  public function supp() {
    
    $this->db->query('DELETE FROM f_categories WHERE Nom = "' . $this->nom . '"');
    // Supprimer la catégorie ici
  }
}
