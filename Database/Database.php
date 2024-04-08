<?php

require("database_connect.php");

Class Database{

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function getBookById($idBook){
        
        $sql_search_book = "SELECT * FROM Livro WHERE id_livro = $idBook";

        $result = $this->conn->query($sql_search_book);
        if($result->num_rows > 0){
            $query = $result->fetch_assoc();
            return $query;
        } else {
            return false;
        }
    }

    public function getGenderById($idGender){

        $sql_search_gender = "SELECT * FROM Genero WHERE id = $idGender";

        $result = $this->conn->query($sql_search_gender);
        if($result->num_rows > 0){
            $query = $result->fetch_assoc();
            return $query;
        } else {
            return false;
        }
    }

    public function getBookAndGenderByName($id_book){

        $sql_search_book = "SELECT id_livro, nome_livro, preco, nome_genero
                            FROM Livro 
                            INNER JOIN Genero ON Genero.id = Livro.id_genero
                            WHERE Livro.id_livro = $id_book;
        ";

        $result = $this->conn->query($sql_search_book);
        if($result->num_rows > 0){
            $query = $result->fetch_assoc();
            return $query;
        } else {
            return false;
        }

    }

}

$conn = new Database($mysqli);
?>
