<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
include_once('../model/showArticleContentAction.php');


if (isset($_GET['id']) and !empty($_GET['id'])) { //On cherche l'id avec la variable $_GET si celle ci n'est pas vide
    $essai = new ShowA($bdd_f, $_GET['id']);  //On appelle la fonction ShowA pour afficher les question ds la page article
    $checkIfQuestionExists = $essai->SelectQuestion();

    
}else{ //s'il n y a pas de question message d'erreur

    $errorMsg="Aucune question n'a été trouvée";
}
