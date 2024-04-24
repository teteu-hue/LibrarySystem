<?php include "header.php" ?>

<h1 class="m-3 fs-1"> Emprestimo de Livros</h1>

    <form action="">
        <label class=" m-3 form-label fs-5" for="">Cliente</label>
        <input class=" m-3 form-control form-control-lg fs-5" type="text">

        <label class=" m-3 form-label fs-5" for="">Livro</label>
        <input class=" m-3 form-control form-control-lg fs-5" type="text">

        <label class=" m-3 form-label fs-5" for="">Data de emprestimo</label>
        <input class=" m-3 form-control form-control-lg fs-5" type="date">

        <label class=" m-3 form-label fs-5" for="">Data limite para devolução</label>
        <input class=" m-3 form-control form-control-lg fs-5" type="date">
    </form>

    <div>

        <button class=" m-3 btn btn-outline-success btn-sm fs-5" type="submit">Enviar</button> <button class="m-3 btn btn-outline-danger btn-sm fs-5" type="reset">Limpar</button>
    </div>





<?php require("footer.php")?>
