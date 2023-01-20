<?php
//on inclut les fichiers dont on a besoin
include_once('../core/databaseAction.php');
//On définit la class
class Radio{
    //on définit la variable connection 
    private $connection;     

    public function __construct($connection) //on définit la fonction construct pr construire les objets avec la variable comme paramètre
    {
        $this->connection = $connection;
    }

    public function getValuesCat() //fonction pr chercher l'id de la catégorie de la bdd
    {
        $essai=$this->connection->query('SELECT id_cat, Nom FROM f_categories');
        return $essai; //on execute
    }
}


