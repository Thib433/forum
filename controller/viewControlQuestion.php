<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
require('controlSession.php');
include_once('../model/showAllQuestion.php');

$question = new Question($bdd_f); //on appelle la Class Question du fichier showAllQuestion.php

if (isset($_GET['id_cat']) and !empty($_GET['id_cat'])) {
  $questions = $question->selectByCategory($_GET['id_cat']); //on affiche les questions de chaque catégorie

}