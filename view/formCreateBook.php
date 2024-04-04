<?php 
    require_once("../controller/RootDir/RootDir.php");

    $rootDir = RootDir::getRealPath();

    require("$rootDir/model/Address/Address.php");
    require("$rootDir/model/Notebook/Notebook.php");
    require("$rootDir/model/Book/Book.php");
    require("$rootDir/Database/books.php");
    require("$rootDir/model/Library/Library.php");
?>
<?php require("header.php");?>


<form action="acao.php" method="post">
    <pre class="form-group">
        <label class="form-label fs-2" for="">Nome do Livro</label>
        <input class="form-control form-control-lg fs-4 " type="text" name="nameBook" id="">

        <select class="form-control form-control-lg fs-2"  name="genderBook" size="<?php count($genderBooks)?>" id="">          
            <?php for($i = 0; $i < count($genderBooks); $i++){ ?>
                
                <option class="option fs-2" value="<?php echo $genderBooks[$i]->getIdGenderBook()?>">
                    <?php echo $genderBooks[$i]->getName()?>
                </option>

            <?php }?>

        </select>

        <label class="form-label fs-2" for="">Preço do Livro</label>
        <input class="form-control form-control-lg fs-4" type="number" step="0.01" name="price">
        

        <label class="form-label fs-2" for="">Número de Páginas</label>
        <input class="form-control form-control-lg fs-4" type="number" name="numPage">

        <button class="btn btn-primary fs-5" type="submit">Enviar</button> <button class="btn btn-primary fs-5" type="reset">Limpar</button>

    </pre>

</form>

<?php require("footer.php") ?>
