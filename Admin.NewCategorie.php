<?php

include_once('../core/databaseAction.php');

include_once('../model/Admin.newCategorieValidate.php');


if (isset($_POST['post-categorie'])) {
  $test=trim($_POST['name_categorie']);
  if (!empty ($test)) {
    $nom=$_POST['post-categorie'];
    $testq = $bdd_f->query('SELECT * FROM f_categories WHERE Nom = "'.$nom.'"');
     if ($testq->rowCount() > 0) {
        $errorMsg = "Une categorie avec ce titre existe déjà";
      } else {
        // Vérifie si il y a déjà 8 catégories dans la base de données
        $cat8 = $bdd_f->query('SELECT * FROM f_categories');
        if ($cat8->rowCount() > 7) {
          $errorMsg = "Vous ne pouvez pas ajouter une nouvelle categorie, car le nombre maximal est déjà atteint";
        } else {
      $categorie = new Categorie($_POST['name_categorie'],$bdd_f);
      $categorie->save();
      $successMsg = "La catégorie a bien été ajoutée !";
      }
    }
  } else {
    $errorMsg = "Veuillez donner un nom";
  }
}
