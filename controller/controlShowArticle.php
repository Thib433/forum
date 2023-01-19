<?php

include_once('../core/databaseAction.php');
include_once('../model/showArticleContentAction.php');

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $essai = new ShowA($bdd_f, $_GET['id']);
    $checkIfQuestionExists = $essai->SelectQuestion();

    
}else{

    $errorMsg="Aucune question n'a été trouvée";
}
