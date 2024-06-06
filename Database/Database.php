<?php

require("database_script.php");

// ssh grupophp07@192.168.8.10 -> grupo07 -> 1234
// mysql mysql -u grupo07 -p -> grupo07 -> php02

class Database
{

    protected $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    protected function getConnection($file = "settings-database.ini")
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

        if (!isset($this->connection)) {
            $this->connection = new PDO($dsn, $user, $password, $options);
        }

        return $this->connection;
    }

    private function validateSelectQuery($result)
    {
        if (!empty($result)) 
        {
            return $result;
        } else {
            return false;
        }
    }

    protected function runSelectQuery($result)
    { 
        try
        {
            $query = $this->connection->query($result);
            $queryResult = $this->validateSelectQuery($query);
            
            return $queryResult;
        } 
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}
