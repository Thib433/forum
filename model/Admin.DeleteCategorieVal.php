<?php
include_once("../core/databaseAction.php");

class Categoriesup {
  private $nom;

  public function __construct($nom) {
    $this->nom = htmlspecialchars($nom);
  }

  public function supp() {
    $bdd_f = new PDO('mysql:host=localhost; dbname=forum_iconnect; charset=utf8' ,'root', '');
    $bdd_f->query('DELETE FROM f_categories WHERE Nom = "' . $this->nom . '"');
    // Supprimer la catégorie ici
  }
}
