<?php 
    require_once("../controller/RootDir/RootDir.php");

    $rootDir = RootDir::getRealPath();
    
    require("$rootDir/Database/Database.php");
    require("$rootDir/model/Address/Address.php");
    require("$rootDir/model/Notebook/Notebook.php");
    require("$rootDir/model/Book/Book.php");
    require("$rootDir/model/Library/Library.php");

    $genderBooks = $conn->getAllGender();

?>
<?php require("header.php");?>

<form class="row g-3" action="acao.php" method="post">
    
  <div class="col-md-6">
    <label for="inputNameBook" class="form-label">Nome do Livro</label>
    <input type="text" class="form-control" name="nameBook" id="inputNameBook">
  </div>


  <div class="col-md-4">
    <label for="inputState" class="form-label">Gênero</label>
    <select class="form-select" name="genderBook" size="<?php count($genderBooks)?>" id="">          
            <?php foreach($genderBooks as $row){ ?>
                
                <option class="option fs-2" value="<?php echo $row["id_genero"]?>">
                    <?php echo $row["nome_genero"]?>
                </option>

            <?php }?>

    </select>
  </div>
      
  <div class="col-md-6">
    <label for="inputPrice" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" id="inputPrice">
  </div>

  <div class="col-md-6">
    <label for="inputNumPage" class="form-label">Número de Páginas</label>
    <input type="text" name="numPage" class="form-control" id="inputNumPage">
  </div>
      
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-danger">Limpar</button>
  </div>
  <div class="col-md-6">
    
  </div>

</form>

<?php require("footer.php") ?>
