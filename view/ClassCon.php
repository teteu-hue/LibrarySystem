<?php 
require_once("../Database/Database.php");
class Conlogin extends Database{

public function __construct()


    {
       parent::__construct();
    }

    public function login($username, $password)
     {
        $query = "SELECT id_usuario,cod_interno,senha FROM Usuario,Funcionario WHERE  username = :username LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row && password_verify($password, $row['password'])) {
            return true;
        }
        return false;
     }
}

?>