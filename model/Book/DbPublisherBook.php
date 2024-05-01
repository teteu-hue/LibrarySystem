<?php
require_once("$rootDir/Database/Database.php");
require_once("PublisherBook.php");

class DbPulisherBook extends Database
{

    public function __construct()
    {
    }

    public static function getPublisherById($publisher)
    {
        $sql_search_publisher = "SELECT * FROM editora WHERE id_editora = '$publisher'";
        $queryResult = Database::runSelectQuery($sql_search_publisher);
        return $queryResult;
    }

    public static function getAllPublisher()
    {
        $sql_search_all_publisher = "SELECT * FROM editora";
        $queryResult = Database::runSelectQuery($sql_search_all_publisher);
        return $queryResult;
    }

    public static function insertPublisher(PublisherBook $publisher){
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

        $result =$p_sql->execute($data);
       
        return $result;
    }

    public static function deletePublisher($idPublisher){
        $conn = Database::getConnection();

        $sql_delete_publisher = "DELETE FROM editora WHERE id_editora = $idPublisher";

        $p_sql = $conn->exec($sql_delete_publisher);
        
        return $p_sql;
    }
}

?>
