<?php

include_once('../core/databaseAction.php');
require('controlSession.php');
include_once('../model/showAllAnswerOfQuestionAction.php');

      
      
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $reponse = new GetAnswer($bdd_f);
    $getAllOfThisQuestion=$reponse ->selectByQuestions($_GET['id']);
        // do something with the $questions array
}