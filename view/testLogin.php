<?php
   // print_r($_REQUEST);

    if(isset($_POST['submit']) && empty($_POST['email']) && empty($_POST['senha'])){

        include_once('../Database/Database.php');
        $conn= Databese::getConnection();
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECTED * FROM Contato AND Usuario WHERE email=$email AND senha=$senha";

        $result = $conn->querry($sql);

        print_r ($result);

    }
    else{
        header('Location: login.php');

    } 
?>
