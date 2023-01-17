<?php
class Categorie{
  private $nom;

  public function __construct($nom){
    $this->nom = htmlspecialchars($nom);
  }
  public function save()
  {
    $bdd_f = new PDO('mysql:host=localhost; dbname=forum_iconnect; charset=utf8', 'root', '');
    $bdd_f->query('INSERT INTO f_categories (Nom) VALUES ("' . $this->nom . '")');
    // Enregistrer la catégorie ici
  }

}