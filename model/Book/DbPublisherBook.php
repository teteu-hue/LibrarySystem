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
        $queryResult = $this->runSelectQuery($sql_search_publisher);
        return $queryResult;
    }

    public function getAllPublisher()
    {
        $sql_search_all_publisher = "SELECT * FROM editora";
        $queryResult = $this->runSelectQuery($sql_search_all_publisher);
        return $queryResult;
    }

    public function insertPublisher(PublisherBook $publisher){
        if(!$publisher){
            die("Please Insert a Publisher");
        }

        $namePublisher = strtoupper($publisher->getNamePublisher());

        $sql_insert_publisher = "INSERT INTO editora (nome_editora)
                                 VALUES (:nome_editora);";

        $p_sql = $this->connection->prepare($sql_insert_publisher);

        var_dump($p_sql);

        $data = [
            ":nome_editora" => $namePublisher
        ];

        $result =$p_sql->execute($data);
       
        return $result;
    }

    public function deletePublisher($idPublisher){
        
        $sql_delete_publisher = "DELETE FROM editora WHERE id_editora = $idPublisher";
        $p_sql = $this->connection->exec($sql_delete_publisher);
        return $p_sql;
    }

    public function editPublisher($idPublisher, $namePublisher){    

        $sql_update_Publisher = "UPDATE genero 
                              SET nome_genero = :nome_genero 
                              WHERE id_genero = :id_genero";

        $data = [
            "id_genero" => $idPublisher,
            "nome_genero" => strtoupper($namePublisher)
        ];

        $p_sql = $this->connection->prepare($sql_update_Publisher);
        $result = $p_sql->execute($data);
        return $result;
    
    }
}

?>
