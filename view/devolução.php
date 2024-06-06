<?php include "header.php" ?>

<h1 class="chama m-3 fs-1"> Devolução de Livros</h1>

    <form name="devolucao" action="post">
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Cliente</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text">
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Livro</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text">
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Data de devolução</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="date">
        </div>

        <div class="espaço">

            <button class=" m-3 btn btn-outline-success btn-sm fs-5" type="submit">Enviar</button> <button class="m-3 btn btn-outline-danger btn-sm fs-5" type="reset">Limpar</button>
        </div>
    </form>







<?php require("footer.php")?>