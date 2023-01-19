<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
require('controlSession.php');
include_once('../model/showAllAnswerOfQuestionAction.php');

      

      
if (isset($_GET['id']) and !empty($_GET['id'])) { //On cherche l'id avec la variable $_GET si celle ci n'est pas vide
    $reponse = new GetAnswer($bdd_f); //On appelle la fonction GetAnswer pr afficher les reponses
    $getAllOfThisQuestion=$reponse ->selectByQuestions($_GET['id']);
        
}