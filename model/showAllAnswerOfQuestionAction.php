<?php

require('../core/databaseAction.php');

//selection de la question correspondant à l'id de la question sur laquelle l'utilisateur a cliqué
$getAllOfThisQuestion = $bdd_f->prepare('SELECT id_q, date_publication_r, contenu_r from reponse where id_q = ? order by id desc');
$getAllOfThisQuestion->execute(array($_GET['id']));