<?php
require_once("../controller/RootDir/RootDir.php");

$rootDir = RootDir::getRealPath();

require_once("$rootDir/model/Book/DbGenderBook.php");
require("$rootDir/model/Address/Address.php");
require("$rootDir/model/Book/Book.php");

$genderBooks = DbGenderBook::getAllGender();

?>
<?php require("header.php"); ?>

<form class="row g-3 createBookForm" action="acao.php" method="post">

  <div class="col-md-6">
    <label for="inputNameBook" class="form-label">Nome do Livro</label>
    <input type="text" class="form-control" name="nome_livro" id="inputNameBook">
  </div>

  <div class="col-md-4">

    <label for="inputState" class="form-label">Gênero</label>
    <a href="formCreateGender.php" class=" m-3 btn btn-outline-primary btn-sm fs-5">+</a>

    <select class="form-select" name="id_genero" id="">

      <?php foreach ($genderBooks as $row) { ?>
        <option class="option fs-2" value="<?php echo $row['id_genero'] ?>">
          <?php echo $row['nome_genero'] ?>
        </option>
      <?php } ?>

    </select>
  </div>

  <div class="col-md-6">
    <label for="inputPrice" class="form-label">Price</label>
    <input type="number" name="preco" class="form-control" id="inputPrice">
  </div>

  <div class="col-md-6">
    <label for="inputNumPage" class="form-label">Número de Páginas</label>
    <input type="text" name="numero_paginas" class="form-control" id="inputNumPage">
  </div>

  <div class="col-md-6">
    <label for="inputNumPage" class="form-label">Descrição</label>
    <textarea type="text" cols="50" rows="4" name="descricao" class="form-control" id="inputNumPage">
    </textarea>
    <style>
      textarea {
        resize: none;
      }
    </style>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-danger">Limpar</button>
  </div>

</form>

<?php require("footer.php") ?>