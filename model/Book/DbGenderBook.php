<?php

require_once("$rootDir/Database/Database.php");
require_once("$rooGenderBook.php");

class DbGenderBook
{
    public function getGenderById($idGender){

        $conn = Database::getConnection();

        $sql_search_gender = "SELECT * FROM Genero WHERE id_genero = $idGender";  
        $result = $conn->query($sql_search_gender);
        $queryResult = Database::validateSelectQuery($result);
        return $queryResult;
    }

    public function getAllGender(){
        $conn = Database::getConnection();

        $sql_search_all_gender = "SELECT * FROM Genero";

        $result = $conn->query($sql_search_all_gender);
        $queryResult = Database::validateSelectQuery($result);
        return $queryResult;
    }

    
}

?>
