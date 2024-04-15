<?php

use function PHPSTORM_META\map;

require_once("../../controller/RootDir/RootDir.php");
$root = RootDir::getRealPath();

require_once("$root/Database/Database.php");
require_once("$root/model/Book/Book.php");

Class DbBook
{

    public function getBookById($idBook){
        
        $sql_search_book = "SELECT * FROM Livro WHERE id_livro = $idBook";
        
        $conn = Database::getConnection();

        $result = $conn->query($sql_search_book);
        $queryResult = Database::validateSelectQuery($result);
        return $queryResult;
    }

    public function getAllBook(){
        $conn = Database::getConnection();
        $sql_search_all_book = "SELECT * FROM Livro";

        $result = $conn->query($sql_search_all_book);
        $queryResult = Database::validateSelectQuery($result);
        return $queryResult;
    }

    public function insertBook(Book $book){
        if(!$book){
            die("Please Insert a Book");
        }
        $conn = Database::getConnection();

        $name = $book->getNameBook();
        $genderBook = $book->getGenderBook()->getGenderID();

        $preco = $book->getPrice();
        $numPage = $book->getNumPage();
        $description = $book->getDescription();
        $sql_insert_book = "INSERT INTO Livro (nome_livro, id_genero, preco, numeroDePaginas, descricao)  
                            VALUES(:nome, :id_genero, :preco, :numPage, :descricao)";

        $p_sql = $conn->prepare($sql_insert_book);

        var_dump($p_sql);
        
        $data = [
            ":nome" => $name,
            ":id_genero" => $genderBook,
            ":preco" => $preco,
            ":numPage" => $numPage,
            ":descricao" => $description
        ];

        return $p_sql->execute($data);
    }

    public function getBookAndGenderByID($id_book){

        $conn = Database::getConnection();

        $sql_search_book = "SELECT id_livro, nome_livro, preco, nome_genero, numeroDePaginas
                            FROM Livro 
                            INNER JOIN Genero ON Genero.id_genero = Livro.id_genero
                            WHERE Livro.id_livro = $id_book;
        ";

        $result = $conn->query($sql_search_book);
        $queryResult = Database::validateSelectQuery($result);
        return $queryResult;
    }
}
echo "<pre>";

$db = new DbBook();
$ob = new Book("Jeff", new GenderBook(1, "Romance"), 55.5, 555, "test");
$query = $db->insertBook($ob);

$result = $db->getBookAndGenderByID(19);
var_dump($result);
?>