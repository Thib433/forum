<?php

include_once('../core/databaseAction.php');
require('controlSession.php');
include_once('../model/showAllQuestion.php');

$question = new Question($bdd_f);

if (isset($_GET['id_cat']) and !empty($_GET['id_cat'])) {
  $questions = $question->selectByCategory($_GET['id_cat']);
  // do something with the $questions array
}