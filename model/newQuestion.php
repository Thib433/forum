<?php
require('../core/databaseAction.php');

$bdd_f->query('INSERT INTO questions (titre, objet, Contenu, date_publication) VALUES ("'.$question_title.'", "'.$question_objet.'"," '.$question_contenu.'"," '.$question_date.'")');