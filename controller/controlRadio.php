<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
include_once('../model/requestRadio.php');

//On appelle la Class Radio ainsi que la fonction getValuesCat
$values_cat = new Radio($bdd_f);
$essai1=$values_cat->getValuesCat();

?>