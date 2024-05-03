<?php

require_once("$rootDir/Database/Database.php");
require_once("GenderBook.php");

class DbGenderBook extends Database
{

    public function __construct()
    {
       parent::__construct();
    }

    public function getGenderById($idGender)
    {

        $sql_search_gender = "SELECT * FROM genero WHERE id_genero = $idGender";
        $queryResult = $this->runSelectQuery($sql_search_gender);
        
        if($queryResult->rowCount() > 0){
            return $queryResult;
        } else {
            return;
        }
    }

    public function getAllGender()
    {

        $sql_search_all_gender = "SELECT * FROM Genero";
        $queryResult = $this->runSelectQuery($sql_search_all_gender);

        if($queryResult->rowCount() > 0){
            return $queryResult;
        } 

    }

    public function insertGender(GenderBook $genderBook)
    {
        if (!$genderBook) {
            die("Please Insert a Book");
        }

        $name = strtoupper($genderBook->getName());

        $sql_insert_book = "INSERT INTO genero (nome_genero)  
                            VALUES(:nome_genero);";

        $p_sql = $this->connection->prepare($sql_insert_book);

        $data = [
            ":nome_genero" => $name,
        ];

        $result = $p_sql->execute($data);
        return $result;
    }

    public function deleteGender($idGender)
    {
        $sql_delete_gender = "DELETE FROM genero WHERE genero.id_genero = $idGender";


        $p_sql = $this->connection->exec($sql_delete_gender);

        return $p_sql;
    }

    public function editGender($idGender, $nameGender)
    {

        $sql_update_gender = "UPDATE genero 
                              SET nome_genero = :nome_genero 
                              WHERE id_genero = :id_genero";

        $data = [
            "id_genero" => $idGender,
            "nome_genero" => strtoupper($nameGender)
        ];

        $result = $this->connection->prepare($sql_update_gender)->execute($data);

        return $result;
    }
}
