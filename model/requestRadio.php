<?php
include_once('../core/databaseAction.php');

class Radio{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getValuesCat()
    {
        $essai=$this->connection->query('SELECT id_cat, Nom FROM f_categories');
        return $essai;
    }
}


