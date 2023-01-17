<?php

include_once('../core/databaseAction.php');

//Vérifier si lid de la question est rentrée dans l'url

if (isset($_GET['id']) and !empty($_GET['id'])){

    //Récupérer l'identifiant de la question
    $idOfTheQuestion = $_GET['id'];
    $checkIfQuestionExists = $bdd_f->prepare('SELECT id, titre, contenu, pseudo_auteur, date_publication FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    //if ($checkIfQuestionExists->rowCount() > 0){

        //Récupérer toutes les datas de la question

        //$questionInfos = $checkIfQuestionExists->fetch();

        //Stocker les datas de la question dans des variables propres

        //$question_title = $questionInfos['titre'];
        //$question_contenu = $questionInfos['contenu'];
        //$question_auteur = $questionInfos['pseudo_auteur'];
        //$question_date_publication = $questionInfos['date_publication'];



    //}else{
        //$errorMsg="Aucune question n'a été trouvée";
    //}

}else{

    $errorMsg="Aucune question n'a été trouvée";
}