<?php
require_once("../controller/RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

include_once("$rootDir/view/header.php");
require_once("$rootDir/model/Book/DbGenderBook.php");

?>

<style>
    .input-gender::placeholder {
        text-align: center;
    }
</style>


<div class="container text-center ">
    <div class="row align-items-center text-center">
        <div class="col">
        </div>
        <div class="col">


        <form method="POST" action="/php07/LibrarySystem/controller/Publisher/add.php">
                <?php if (!isset($_GET["error"])) { ?>
                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Editora</label>
                        <input type="text" name="nome_editora" placeholder="Digite o nome do Editora do livro" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <button type="submit" class="btn btn-primary">Criar</button>
                    <?php } else if(isset($_GET['error'])) {
                    $error = $_GET["error"];
                    switch ($error) {

                        case 1:
                    ?>

                            <div class="mb-3">

                                <label for="exampleInputEmail1" class="form-label">Editora <?php ?></label>
                                <input type="text" name="nome_editora" placeholder="Insira uma Editora válido" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <button type="submit" class="btn btn-primary">Criar</button>

                        <?php break;

                        case 2: ?>
                            <div class="mb-3">

                                <label for="exampleInputEmail1" class="form-label">Editora <?php ?></label>
                                <input type="text" name="nome_editora" placeholder="Essa Editora já existe no banco de dados" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <button type="submit" class="btn btn-primary">Criar</button>

                        <?php break;?>

                    <?php   } ?>


                </form>
                <?php } ?>
        

        </div>
        <div class="col">
        </div>
    </div>
</div>

<?php include("$rootDir/view/footer.php"); ?>