<?php 
require_once("header.php");

require_once("../controller/RootDir/RootDir.php");

$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbGenderBook.php");

$dbg = new DbGenderBook();

$genderBooks = $dbg->getAllGender();

?>


<link rel="stylesheet" href="/LibrarySystem/css/menu-admin.css">

<div class="row">
    <div class="col"></div>
    <div class="col d-flex flex-column">
        <h1 class="text-title">
            Gênero
        </h1>

        <div class="list-group list-group-flush d-flex justify-content-evenly">

            <div class="list-group-item">
                <a href="formCreateGender.php" class="btn btn-success buttom-item">
                    <i class="fa-solid fa-plus"></i>
                    <span class="button-action">Criar</span>
                </a>
                
            </div>

        </div>

        <div class="list-group list-group-flush">
            <div class="list-group-item">

                <div class="btn-group dropdown list-items">

                    <button class="btn btn-light buttom-publisher" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lista de Gêneros
                    </button>

                    <div class="dropdown-menu container-publisher">

                        <?php if(empty($genderBooks)){ ?>

                        <div class="dropdown-item  list-group-item d-flex justify-content-between align-items-start">
                            <?php echo "Nenhum livro adicionado" ?>
                        </div>

                        <?php } else { ?>

                        <?php foreach($genderBooks as $row){ ?>
                        <div class="dropdown-item  list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><?php echo $row['nome_genero'] ?></div>
                                <?php  ?>
                            </div>
                            <div class="container-form-buttons d-flex justify-content-evenly" style="width: 10rem;">
                                <form method="POST" action="/LibrarySystem/controller/Gender/delete.php?id_genero=<?php echo $row["id_genero"]?>">

                                    <button type="submit" class="badge bg-danger rounded-pill">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </form>

                                <form method="POST" action="/LibrarySystem/controller/Gender/get.php?id_genero=<?php echo $row["id_genero"]?>">
                                    <button type="submit" class="badge bg-warning rounded-pill">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <?php }
                        } ?>

                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="col"></div>
</div>


<?php
unset($dbg); 
require_once("footer.php"); 
?>