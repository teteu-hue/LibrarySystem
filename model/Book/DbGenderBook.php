<?php

require_once("$rootDir/Database/Database.php");
require_once("GenderBook.php");

class DbGenderBook extends Database
{

    public function __construct()
    {
    }

    public function getGenderById($idGender){

        $sql_search_gender = "SELECT * FROM Genero WHERE id_genero = $idGender";  
        $queryResult = Database::runSelectQuery($sql_search_gender);
        return $queryResult;
    }

    public function getAllGender(){
        
        $sql_search_all_gender = "SELECT * FROM Genero";
        $queryResult = Database::runSelectQuery($sql_search_all_gender);
        return $queryResult;
    }

    public function insertGender(GenderBook $genderBook){
        if(!$genderBook){
            die("Please Insert a Book");
        }
        $conn = Database::getConnection();

        $name = $genderBook->getName();
        
        $sql_insert_book = "INSERT INTO genero (nome_genero)  
                            VALUES(:nome_genero);";

        $p_sql = $conn->prepare($sql_insert_book);
        
        $data = [
            ":nome_genero" => $name,
        ];

        return $p_sql->execute($data);
    }
}

?>
