<?php
require_once("../controller/RootDir/RootDir.php");

$rootDir = RootDir::getRealPath();

require("$rootDir/Database/Database.php");
require("$rootDir/model/Address/Address.php");
require("$rootDir/model/Book/Book.php");

//$genderBooks = Database::getAllGender();

?>
<?php require("header.php"); ?>

<form class="row g-3" action="acao.php" method="post">

  <div class="col-md-6">
    <label for="inputNameBook" class="form-label">Nome do Livro</label>
    <input type="text" class="form-control" name="nome_livro" id="inputNameBook">
  </div>



  <div class="col-md-4">
    
    <label for="inputState" class="form-label">Gênero </label>
                  <button type="button" class=" m-3 btn btn-outline-primary btn-sm fs-5" data-bs-toggle="modal" data-bs-target="#botaoModal">+</button>

              <div id=botaoModal class="modal">

                <div class="modal-dialog">

                  <div class="modal-content">

                    <div class="modal-header">
                      <h1 class="modal-title">Adicionar Gênero </h1>
                      <button type="button" class="btn btn-close" data-bs-dismiss="modal" ></button>
                    </div>

                    <div class="modal-body">
                      <input type="text" name="novoGenero" size="">
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal" > criar</button>
                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >fechar</button>
                    </div>
                  </div>
                </div>
              </div>
   
              <select class="form-select" name="id_genero" id="">

      <option class="option fs-2" value="Romance">
        Romance
      </option>

      <option class="option fs-2" value="Fantasia">
        Fantasia
      </option>

      <option class="option fs-2" value="ficcao-cientifica">
        Ficção Cientifica
      </option>

      <option class="option fs-2" value="Suspense">
        Suspense
      </option>

    </select>
  </div>

  <div class="col-md-6">
    <label for="inputPrice" class="form-label">Price</label>
    <input type="number" name="preco" class="form-control" id="inputPrice">
  </div>

  <div class="col-md-6">
    <label for="inputNumPage" class="form-label">Número de Páginas</label>
    <input type="text" name="numeroDePaginas" class="form-control" id="inputNumPage">
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
  <div class="col-md-6">

  </div>

</form>

<?php require("footer.php") ?>