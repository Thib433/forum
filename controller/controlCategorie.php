<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
include_once('../model/showAllCategorie.php');
//on appelle la class ShowCategorie et la fonction getCategory pour afficher toutes les categories
$cate = new ShowCategorie($bdd_f);
$arg=$cate->getCategory();