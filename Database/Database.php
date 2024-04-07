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

}

$conn = new Database($mysqli);
?>
