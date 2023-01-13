<?php
include_once('../core/databaseAction.php');



$getAllCategories = $bdd_f->prepare('SELECT Nom, id_cat FROM f_categories');
$getAllCategories->execute(array());

