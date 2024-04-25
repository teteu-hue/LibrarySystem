<?php
require_once("../controller/RootDir/RootDir.php");
$rootDir = RootDir::getRealPath();

include("$rootDir/view/header.php");
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

            <form method="POST" action="?sucess=1">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gênero</label>
                    <input type="text" placeholder="Digite o nome do gênero do livro" class="form-control input-gender" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="col">

        </div>
    </div>
</div>


<?php include("$rootDir/view/footer.php"); ?>