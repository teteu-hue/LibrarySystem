<?php
require_once("header.php");
require_once("../controller/RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbBook.php");
$db = new DbBook();

$books = $db->getAllBookAndGender();

?>

<style>
    .row {
        margin-top: 1.5rem;
    }
</style>

<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
        </div>
        <div class="col">
            <h1>Biblioteca</h1>
            <p>Livros disponíveis para alugar</p>
        </div>
        <div class="col">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Procure por um livro específico" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<div class="container text-center d-flex justify-content align-items" style="width: 90%;">
    <div class="row d-flex flex-flow" style="width:100%">

        <?php foreach ($books as $row) { ?>

            <div class="col">
                <div class="card" style="width: 20rem; margin-top:2rem;">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["nome_livro"] ?></h5>
                        
                        <?php if ($row["descricao"] == NULL) { ?>

                            <p class="card-text text-danger">Nenhuma Descrição cadastrada</p>

                        <?php } else { ?>

                            <p class="card-text text-danger"><?php $row["descricao"] ?></p>

                        <?php } ?>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $row["nome_genero"] ?></li>
                            <li class="list-group-item">R$<?php echo $row["preco"] ?></li>
                            <li class="list-group-item">Número de páginas: <?php echo $row["numero_paginas"] ?></li>
                        </ul>
                        <a href="#" class="btn btn-primary">Ver produto</a>
                    </div>

                </div>
            </div>

        <?php }; ?>


    </div>

</div>

<?php require("footer.php") ?>