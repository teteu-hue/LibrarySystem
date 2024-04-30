<?php

require("database_script.php");

class Database
{

    private static $conn;

    public static function getConnection($file = "settings-database.ini")
    {
        try {

            if ($database = parse_ini_file($file)) {

                $driver = $database["driver"];
                $db = $database["db"];
                $host = $database["host"];
                $port = $database["port"];
                $user = $database["username"];
                $password = $database["password"];

                $dsn = "$driver:host=$host;dbname=$db;port=$port";

                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];
            }
        } 
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        catch (Exception $e)
        {
            echo "Unable to open " . $file;
        }

        if (!isset(self::$conn)) {
            self::$conn = new PDO($dsn, $user, $password, $options);
        }

        return self::$conn;
    }

    public static function validateSelectQuery($result)
    {
        if (!empty($result)) 
        {
            return $result;
        } else {
            return false;
        }
    }

    public static function runSelectQuery($result)
    { 
        try
        {
            $query = Database::getConnection()->query($result);
            $queryResult = Database::validateSelectQuery($query);
            return $queryResult;
        } 
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}
