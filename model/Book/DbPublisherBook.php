<?php
require_once("$rootDir/Database/Database.php");
require_once("PublisherBook.php");

class DbPulisherBook extends Database
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getPublisherById($publisher)
    {
        $sql_search_publisher = "SELECT * FROM Editora WHERE id_editora = '$publisher'";
        $queryResult = $this->runSelectQuery($sql_search_publisher);
        return $queryResult;
    }

    public function getAllPublisher()
    {
        $sql_search_all_publisher = "SELECT * FROM Editora ORDER BY nome_editora ASC";
        $queryResult = $this->runSelectQuery($sql_search_all_publisher);
        return $queryResult;
    }

    public function getPublisherByName($namePublisher){
        $sql_search_publisher_by_name = "SELECT *
                                         FROM Editora
                                         WHERE nome_editora = '$namePublisher'";
        
        $p_sql = $this->runSelectQuery($sql_search_publisher_by_name);
        
        if($p_sql->rowCount() > 0){
            return $p_sql;
        } else {
            return false;
        }
    }

    public function insertPublisher(PublisherBook $publisher)
    {
        if(!$publisher){
            die("Please Insert a Publisher");
        }

        $namePublisher = strtoupper($publisher->getNamePublisher());

        $sql_insert_publisher = "INSERT INTO Editora (nome_editora)
                                 VALUES (:nome_editora);";

        $p_sql = $this->connection->prepare($sql_insert_publisher);

        $data = [
            ":nome_editora" => $namePublisher
        ];

        $result =$p_sql->execute($data);
       
        return $result;
    }

    public function deletePublisher($idPublisher)
    {
        
        $sql_delete_publisher = "DELETE FROM Editora WHERE id_editora = $idPublisher";
        $p_sql = $this->connection->exec($sql_delete_publisher);
        return $p_sql;
    }

    public function editPublisher($idPublisher, $namePublisher)
    {    

        $sql_update_publisher = "UPDATE Editora 
                              SET nome_editora = :nome_editora 
                              WHERE id_editora = :id_editora";

        $data = [
            "id_editora" => $idPublisher,
            "nome_editora" => strtoupper($namePublisher)
        ];

        $result = $this->connection->prepare($sql_update_publisher)->execute($data);
        return $result;
    }
}

?>
