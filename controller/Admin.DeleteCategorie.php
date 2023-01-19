<?php

//Programme de l'interface admin qui permet d'effacer des catégories
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php'); 

include_once('../model/Admin.DeleteCategorieVal.php');


if (isset($_POST['stop-categorie'])) {  
  $test=trim($_POST['name_categorie_stop']); //on stocke les données présentes ds la variable $_POST['stop-categorie'] ds la variable $test en excluant les espaces
  if (!empty($test)) { //si la variable test n'est pas vide
    $catnom = $_POST['name_categorie_stop'];
    $testq = $bdd_f->query('SELECT * FROM f_categories WHERE Nom = "'.$catnom.'"'); //on cherche la nom de la categorie 
      
      if ($testq->rowCount() == 0) { //si on ne le trouve pas ça nous affiche un message d'erreur
        $errorMsgd = "Aucune catégorie ne comporte ce nom";
      } else { //sinon on la supprime et on aura un message de succes
        $categorie = new Categoriesup($_POST['name_categorie_stop'],$bdd_f);
      $categorie->supp();
      $successMsgd = "La catégorie a bien été supprimée !";
    } 
  }else { // si les champs sont vides on aura un message d'erreur
        $errorMsgd = "Veuillez remplir tous les champs";
    }
}