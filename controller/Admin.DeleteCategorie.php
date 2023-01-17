<?php

include_once('../core/databaseAction.php');

include_once('../model/Admin.DeleteCategorieVal.php');


if (isset($_POST['stop-categorie'])) {
  $test=trim($_POST['name_categorie_stop']);
  if (!empty($test)) {
    $catnom = $_POST['name_categorie_stop'];
    $testq = $bdd_f->query('SELECT * FROM f_categories WHERE Nom = "'.$catnom.'"');
      
      if ($testq->rowCount() == 0) {
        $errorMsgd = "Aucune catégorie ne comporte ce nom";
      } else {
        $categorie = new Categoriesup($_POST['name_categorie_stop']);
      $categorie->supp();
      $successMsgd = "La catégorie a bien été supprimée !";
    } 
  }else {
        $errorMsgd = "Veuillez remplir tous les champs";
    }
}