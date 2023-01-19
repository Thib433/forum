<?php

//Programme de l'interface admin qui permet d'ajouter des catégories
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');

include_once('../model/Admin.newCategorieValidate.php');


if (isset($_POST['post-categorie'])) {
  $test=trim($_POST['name_categorie']); //on stocke les données présentes ds la variable $_POST['name-categorie'] ds la variable $test en excluant les espaces
  if (!empty ($test)) { //si la variable test n'est pas vide
    $nom=$_POST['post-categorie']; 
    $testq = $bdd_f->query('SELECT * FROM f_categories WHERE Nom = "'.$nom.'"'); //on cherche la nom de la categorie 
     if ($testq->rowCount() > 0) { //si on trouve ça nous affiche un message d'erreur
        $errorMsg = "Une categorie avec ce titre existe déjà";
      } else {
        // Vérifie si il y a déjà 8 catégories dans la base de données
        $cat8 = $bdd_f->query('SELECT * FROM f_categories');
        if ($cat8->rowCount() > 7) {
          $errorMsg = "Vous ne pouvez pas ajouter une nouvelle categorie, car le nombre maximal est déjà atteint";
        } else { //si le nom de la catégorie n'existe pas et il y a moins de 8 catégorie, le code s'éxecute et on ajoute la catégorie
      $categorie = new Categorie($_POST['name_categorie'],$bdd_f);
      $categorie->save();
      $successMsg = "La catégorie a bien été ajoutée !";
      }
    }
  } else { //si le champ est vide on aura un message d'erreur
    $errorMsg = "Veuillez donner un nom";
  }
}
