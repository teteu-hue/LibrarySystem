<?php 
include "header.php";
include ('../Database/conectLogin.php');

if(isset($_POST)['email']) || isset($_POST['senha']) {
    if(strlen($_POST['email'])) == 0 {
        echo "preencha seu E-mail";
    } else if (strlen($_POST['senha']) == 0){
        echo "preencha sua senha";
    }else{
        /* limpando o campo para não ser explorado a segurança*/
        $email= $mysqli->real_escape_string($_POST['email']);
        $senha= $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM Usuario,Contato WHERE email = $email and senha = $senha  "
        $sql_querry = $mysqli->querry($sql_code) or die("Falha na execução do código SQL:".$mysql->error);

        $quantidade = $sql_querry -> num_rows;

        if($quantidade == 1){

            $usuario = $sql_querry->fetch_assoc();

            if(isset($_SESSION)){
                session_start();
            }

            $_SESSION['user'] = $usuario['idUsuario'];
            $_SESSION['name'] = $usuario['nome']

            header("Location: menu-admin.php")

        }else{
            echo "Falha ao logar (Senha ou E-mail incorretos)"
        }
    }

}

?>
 



    <H1 class="chama m-3 fs-1">Login</H1>
    <form name="login" action="" method="">
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">E-Mail:</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="email" placeholder="Digite seu E-mail" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Senha:</label>
            <input class=" m-3 form-control form-control-lg fs-5"  name="senha" type="password" placeholder="Digite sua senha"  >
        </div>
        <div class="espaço">

            <button class=" m-3 btn btn-outline-success btn-sm fs-5" type="submit">Enviar</button> <button class=" m-3 btn btn-outline-danger btn-sm fs-5" type="reset">Limpar</button>
        </div>

    </form>








<?php require("footer.php")?>
