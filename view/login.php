<?php include "header.php" ?>



<H1 class="chama m-3 fs-1">Login</H1>
<form name="login" action="post">
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">E-Mail:</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="email" placeholder="Digite seu E-mail" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Senha:</label>
            <input class=" m-3 form-control form-control-lg fs-5"  name="senha" type="password" placeholder="Digite sua senha"  >
        </div>
        <div class="espaço">

            <button class=" m-3 btn btn-outline-success btn-sm fs-5" type="submit">Enviar</button> <button class=" m-3 btn btn-outline-danger btn-sm fs-5" type="reset">Limpar</button>
        </div>

    </form>








<?php require("footer.php")?>
