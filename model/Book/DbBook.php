<?php

require_once("$rootDir/Database/Database.php");
require_once("$rootDir/model/Book/Book.php");
require_once("$rootDir/model/Book/DbPublisherBook.php");
require_once("$rootDir/model/Book/DbGenderBook.php");

Class DbBook extends Database
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getBookById($idBook){
        
        $sql_search_book = "SELECT * FROM Livro WHERE id_livro = $idBook";
        $queryResult = $this->runSelectQuery($sql_search_book);
        return $queryResult;
    }

    public function getAllBook(){

        $sql_search_all_book = "SELECT * FROM Livro";
        $queryResult = $this->runSelectQuery($sql_search_all_book);
        return $queryResult;
    }

    public function insertBook(Book $book){
        if(!$book){
            die("Please Insert a Book");
        }
        
        $name = $book->getNameBook();

        $genderBook = $book->getGenderBook()->getName();
        $publisherBook = $book->getPublisherBook()->getNamePublisher();

        $preco = $book->getPrice();
        $numPage = $book->getNumPage();
        $description = $book->getDescription();
        $sql_insert_book = "INSERT INTO Livro (nome_livro, id_genero, id_editora, preco, numeroDePaginas, descricao)  
                            VALUES(:nome, :id_genero, :id_editora,:preco, :numPage, :descricao)";

        $p_sql = $this->connection->prepare($sql_insert_book);
        
        $data = [
            ":nome" => $name,
            ":id_genero" => $genderBook,
            ":id_editora" => $publisherBook,
            ":preco" => $preco,
            ":numPage" => $numPage,
            ":descricao" => $description
        ];

        return $p_sql->execute($data);
    
}

    public function getBookAndGenderByID($id_book){
       
        $sql_search_book = "SELECT id_livro, nome_livro, preco, nome_genero, numeroDePaginas
                            FROM Livro 
                            INNER JOIN Genero ON Genero.id_genero = Livro.id_genero
                            WHERE Livro.id_livro = $id_book;
        ";

        $queryResult = $this->runSelectQuery($sql_search_book)[0];
        return $queryResult;
    }
}
?>
