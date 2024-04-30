<?php

require_once("$rootDir/Database/Database.php");
require_once("GenderBook.php");

class DbGenderBook extends Database
{

    public function __construct()
    {
    }

    public static function getGenderById($idGender)
    {

        $sql_search_gender = "SELECT * FROM genero WHERE id_genero = $idGender";
        $queryResult = Database::runSelectQuery($sql_search_gender);
        
        if($queryResult->rowCount() > 0){
            return $queryResult;
        } else {
            return NULL;
        }
    }

    public static function getAllGender()
    {

        $sql_search_all_gender = "SELECT * FROM Genero";
        $queryResult = Database::runSelectQuery($sql_search_all_gender);
        return $queryResult;
    }

    public static function insertGender(GenderBook $genderBook)
    {
        if (!$genderBook) {
            die("Please Insert a Book");
        }

        $conn = Database::getConnection();

        $name = strtoupper($genderBook->getName());

        $sql_insert_book = "INSERT INTO genero (nome_genero)  
                            VALUES(:nome_genero);";

        $p_sql = $conn->prepare($sql_insert_book);

        $data = [
            ":nome_genero" => $name,
        ];

        $result = $p_sql->execute($data);
        return $result;
    }

    public static function deleteGender($idGender)
    {
        $sql_delete_gender = "DELETE FROM genero WHERE genero.id_genero = $idGender";

        $conn = Database::getConnection();

        $p_sql = $conn->exec($sql_delete_gender);

        return $p_sql;
    }

    public static function editGender($idGender, $nameGender)
    {
        $conn = Database::getConnection();

        $sql_update_gender = "UPDATE genero 
                              SET nome_genero = :nome_genero 
                              WHERE id_genero = :id_genero";

        $data = [
            "nome_genero" => $nameGender,
            "id_genero" => $idGender
        ];

        $p_sql = $conn->prepare($sql_update_gender);
        
        $result = $p_sql->execute($data);


    }
}
