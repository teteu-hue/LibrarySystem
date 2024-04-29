<?php
require_once("../controller/RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

include_once("$rootDir/view/header.php");
require_once("$rootDir/model/Book/Book.php");
require_once("$rootDir/model/Book/DbGenderBook.php");

?>

<style>
    .input-gender::placeholder{
        text-align: center;
    }
</style>


<div class="container text-center ">
    <div class="row align-items-center text-center">
        <div class="col">
        </div>
        <div class="col">

            <form method="POST" action="/LibrarySystem/controller/Gender/add.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gênero</label>
                    <input type="text" name="nome_genero" placeholder="Digite o nome do gênero do livro" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Criar</button>
            </form>

        </div>
        <div class="col">
        </div>
    </div>
</div>

<?php

?>

<?php include("$rootDir/view/footer.php"); ?>