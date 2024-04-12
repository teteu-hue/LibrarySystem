<?php

require("database_script.php");
require("database-pdo.php");

Class Database{

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function validateSelectQuery($result){
        if(!empty($result)){
            $query = $result->fetch();
            return $query;
        } else {
            return false;
        }
    }

    public function getBookById($idBook){
        
        $sql_search_book = "SELECT * FROM Livro WHERE id_livro = $idBook";

        $result = $this->conn->query($sql_search_book);
        $queryResult = $this->validateSelectQuery($result);
        return $queryResult;
    }

    public function getGenderById($idGender){

        $sql_search_gender = "SELECT * FROM Genero WHERE id_genero = $idGender";

        $result = $this->conn->query($sql_search_gender);
        $queryResult = $this->validateSelectQuery($result);
        return $queryResult;
    }

    public function getBookAndGenderByID($id_book){

        $sql_search_book = "SELECT id_livro, nome_livro, preco, nome_genero
                            FROM Livro 
                            INNER JOIN Genero ON Genero.id_genero = Livro.id_genero
                            WHERE Livro.id_livro = $id_book;
        ";

        $result = $this->conn->query($sql_search_book);
        $queryResult = $this->validateSelectQuery($result);
        return $queryResult;
    }

}

$conn = new Database($pdo);
?>
