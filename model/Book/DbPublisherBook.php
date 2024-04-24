<?php
require_once("$rootDir/Database/Database.php");

class DbPulisherBook extends Database
{

    public function __construct()
    {
    }

    public function getPublisherById($publisher)
    {
        $sql_search_publisher = "SELECT * FROM editora WHERE id_editora = $publisher";
        $queryResult = Database::runSelectQuery($sql_search_publisher)[0];
        return $queryResult;
    }
}

?>
