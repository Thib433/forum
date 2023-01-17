<?php
include_once('../core/databaseAction.php');
include_once('../model/requestRadio.php');

$values_cat = new Radio($bdd_f);
$essai=$values_cat->getValuesCat();

?>