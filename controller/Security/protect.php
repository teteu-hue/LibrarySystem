<?php
 if(isset($_SESSION)){
    session_start();
}

if (isset($_SESSION['id'])){
    die("Você não tem permisão para isso, faça login. <p><a href=../view/login.php>Login</a><p>");
}









?>
