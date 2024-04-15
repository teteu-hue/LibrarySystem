<?php

require("database_script.php");
require("database-pdo.php");

Class Database{

    private static $conn;
    
    public static function getConnection($file = "settings-database.ini"){
        try{
            
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
                
        if(!isset(self::$conn)) {
            self::$conn = new PDO($dsn, $user, $password, $options);
            echo "Connection is Sucessfully";
        }

        return self::$conn;
    }
                  
    public static function validateSelectQuery($result){
        if(!empty($result)){
            $query = $result->fetchAll();
            return $query;
        } else {
            return false;
        }
    }
    
    public function getGenderById($idGender){
        
        $sql_search_gender = "SELECT * FROM Genero WHERE id_genero = $idGender";  
        $result = self::$conn->query($sql_search_gender);
        $queryResult = Database::validateSelectQuery($result);
        return $queryResult;
    }

    public function getAllGender(){
        $sql_search_all_gender = "SELECT * FROM Genero";

        $result = self::$conn->query($sql_search_all_gender);
        $queryResult = $this->validateSelectQuery($result);
        return $queryResult;
    }

}
?>
