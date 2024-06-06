<?php
require_once("../controller/RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

include_once("$rootDir/view/header.php");
require_once("$rootDir/model/Book/DbPublisherBook.php");

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

            <?php
            $dbp = new DbPulisherBook();

            $publisher = $dbp->getPublisherById($_GET['edit'])->fetch();

            ?>

            <form method="POST" action="/LibrarySystem/controller/Publisher/edit.php?id_editora=<?php echo $publisher["id_editora"] ?>">
                <?php 
                
                if (!isset($_GET["error"])) 
                {

                ?>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Editora</label>
                        <input type="text" name="nome_editora" value="<?php echo $publisher['nome_editora'] ?>" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>

                    <?php 
                } 
                else 
                { 
                    
                    ?>

                    <?php 
                    switch ($_GET["error"]) {



                        case 1:
                    ?>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Editora</label>
                                <input type="text" name="nome_editora" placeholder="Digite uma Editora válido!" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Editar</button>
                    <?php

                            break;

                        case 2: 
                    ?>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Editora</label>
                                <input type="text" name="nome_editora" placeholder="Essa Editora já existe no banco de dados!" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Editar</button>

                    <?php
                            break;
                    } ?>
        <?php } ?>
    </form>

        </div>
        <div class="col">
        </div>
    </div>
</div>

<?php include("$rootDir/view/footer.php"); ?>