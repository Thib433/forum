<?php

require('../core/databaseAction.php');

if (isset($_POST['post-categorie'])){
    if (!empty($_POST['name_categorie'])){
        $name_categorie=htmlspecialchars($_POST['name_categorie']);
        if (isset($name_categorie)){
            require('../model/newCategorieValidate.php');
        }
    }
}