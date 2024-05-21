
?>
<?php include "header.php" ?>

<div class="container text-center">
    <div class="col">
     <h1>Bem vindo <?php echo htmlspecialchars($_SESSION['username'])?> ao sistema de gerenciamento do Matheus e Rodrigo</h1>      
    </div>
</div>

<div class="border rounded">
    <div>
        <p class="h6">Deseja fazer login ?</p>
        <a href="/LibrarySystem/view/login.php">
            <button type="button" class="btn btn-primary btn-sm">Login</button>
        </a>
    </div>
    <div>
        <p class="h6">Novo por aqui ?</p>
        <a href="/LibrarySystem/view/cadastro.php">
             <button type="button" class="btn btn-primary btn-sm" >cadastre-se</button>
        </a>
    </div>
</div>








<?php require("footer.php")?>
