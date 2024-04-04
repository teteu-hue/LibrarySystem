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
        <label class="form-label" for="">Nome do Livro</label>
        <input class="form-control" type="text" name="nameBook" id="">

        <select class="form-select"  name="genderBook" size="<?php count($genderBooks)?>" id="">          
            <?php for($i = 0; $i < count($genderBooks); $i++){ ?>
                
                <option class="option" value="<?php echo $genderBooks[$i]->getIdGenderBook()?>">
                    <?php echo $genderBooks[$i]->getName()?>
                </option>

            <?php }?>

        </select>

        <label class="form-label" for="">Preço do Livro</label>
        <input class="form-control" type="number" step="0.01" name="price">
        

        <label class="form-label" for="">Número de Páginas</label>
        <input class="form-control" type="number" name="numPage">

        <button class="btn btn-primary" type="submit">Enviar</button> <button class="btn btn-primary" type="reset">Limpar</button>

    </pre>

</form>

<?php require("footer.php") ?>
