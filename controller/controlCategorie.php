<?php

include_once('../core/databaseAction.php');
include_once('../model/showAllCategorie.php');

$cate = new ShowCategorie($bdd_f);
$arg=$cate->getCategory();