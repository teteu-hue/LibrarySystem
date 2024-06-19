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

            <?php
            $dbg = new DbGenderBook();

            $gender = $dbg->getGenderById($_GET['edit'])->fetch();

            ?>

            <form method="POST" action="/php07/LibrarySystem/controller/Gender/edit.php?id_genero=<?php echo $gender["id_genero"]; ?>">
                <?php 
                
                if (!isset($_GET["error"])) 
                {

                ?>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Gênero <?php ?></label>
                        <input type="text" name="nome_genero" value="<?php echo $gender['nome_genero'] ?>" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                                <label for="exampleInputEmail1" class="form-label">Gênero <?php ?></label>
                                <input type="text" name="nome_genero" placeholder="Digite um gênero válido!" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Editar</button>
                    <?php

                            break;

                        case 2: 
                    ?>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Gênero <?php ?></label>
                                <input type="text" name="nome_genero" placeholder="Esse gênero já existe no banco de dados!" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Editar</button>

                    <?php
                            break;
                    } ?>
            </form>
        <?php } ?>

        </div>
        <div class="col">
        </div>
    </div>
</div>

<?php unset($dbg); ?>

<?php include("$rootDir/view/footer.php"); ?>