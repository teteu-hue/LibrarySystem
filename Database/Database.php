<?php

require("database_script.php");
require("database-pdo.php");

Class Database{

    private $conn;

    public function __construct($file = 'settings-database.ini'){    
try{

    $file = 'settings-database.ini';
    
    if($database = parse_ini_file($file)){
        
        $driver = $database["driver"];
        $db = $database["db"];
        $charset = $database["charset"];
        $host = $database["host"];
        $port = $database["port"];
        $user = $database["username"];
        $password = $database["password"]; 

        $dsn = "$driver:host=$host;dbname=$db;charset=$charset;port=$port";
        
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
    }
} catch(Exception $e){
    echo "Unable to open " . $file;
}
        
        try {
            $this->conn = new PDO($dsn, $user, $password, $options);
            echo "Connected Sucessfully!<br>";
        
        } catch(PDOException $e) {
            echo "Connected Failed: " . $e->getMessage();
        }
    }

    public function getConn(){
        return $this->conn;
    }

    public function validateSelectQuery($result){
        if(!empty($result)){
            $query = $result->fetchAll();
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

    public function getAllBook(){
        $sql_search_all_book = "SELECT * FROM Livro";

        $result = $this->conn->query($sql_search_all_book);
        $queryResult = $this->validateSelectQuery($result);
        return $queryResult;
    }

    public function getGenderById($idGender){

        $sql_search_gender = "SELECT * FROM Genero WHERE id_genero = $idGender";

        $result = $this->conn->query($sql_search_gender);
        $queryResult = $this->validateSelectQuery($result);
        return $queryResult;
    }

    public function getAllGender(){
        $sql_search_all_gender = "SELECT * FROM Genero";

        $result = $this->conn->query($sql_search_all_gender);
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

    public function insertBook(Book $book){
        $name = $book->getNameBook();
        $genderBook = $book->getGenderBook();
        $sql_insert_book = "INSERT INTO Livro (nome_livro, id_genero, preco, numeroDePaginas, descricao)  
                            VALUES()";
    }

}

$conn = new Database();
?>
