<?php
session_start();
require_once("../Database/Database.php");
require 'ClassCon.php';


$database = new Database();
$db = $database->getConnection();

$user = new Conlogin($db);

$username = $_POST['username'];
$password = $_POST['password'];

if ($user->login($username, $password)) {
    $_SESSION['username'] = $username;
    header("Location: inicial.php");
    exit();
} else {
    echo "Username ou senha incorretos.";
}
?>
<?php
include "header.php"
?>
 



    <H1 class="chama m-3 fs-1">Login</H1>
    <form name="login" action="login.php" method="POST">
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">E-Mail:</label>
            <input class=" m-3 form-control form-control-lg fs-5" name="username" type="text" id="username" placeholder="Digite seu E-mail" >
           
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Senha:</label>
            <input class=" m-3 form-control form-control-lg fs-5"  name="password" type="password" id="password" placeholder="Digite sua senha"  >
           
        </div>
        <div class="espaço">

            <button class=" m-3 btn btn-outline-success btn-sm fs-5" type="submit" >Enviar</button> <button class=" m-3 btn btn-outline-danger btn-sm fs-5" type="reset">Limpar</button>
        </div>

    </form>








<?php require("footer.php")?>
