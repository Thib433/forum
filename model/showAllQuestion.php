<?php
require('../core/databaseAction.php');


$checkIfCategorieExists=$bdd_f->prepare('SELECT id, titre, objet, contenu, date_publication FROM questions WHERE objet = ? order by objet desc');
$checkIfCategorieExists->execute(array($id_categorie));

?>