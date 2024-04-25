<?php
require_once("$rootDir/Database/Database.php");
require_once("PublisherBook.php");

class DbPulisherBook extends Database
{

    public function __construct()
    {
    }

    public function getPublisherById($publisher)
    {
        $sql_search_publisher = "SELECT * FROM editora WHERE id_editora = '$publisher'";
        $queryResult = Database::runSelectQuery($sql_search_publisher);
        return $queryResult;
    }

    public function insertPublisher(PublisherBook $publisher){
        if(!$publisher){
            die("Please Insert a Publisher");
        }

        $conn = Database::getConnection();

        $namePublisher = strtoupper($publisher->getNamePublisher());

        $sql_insert_publisher = "INSERT INTO editora (nome_editora)
                                 VALUES (:nome_editora);";

        $p_sql = $conn->prepare($sql_insert_publisher);

        var_dump($p_sql);

        $data = [
            ":nome_editora" => $namePublisher
        ];

        return $p_sql->execute($data);
       
    }
}

?>
