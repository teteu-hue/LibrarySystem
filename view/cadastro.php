<?php require("header.php")?>
     
    <script>
        function confereSenha(){
            const senha = document.querySelector('input[name=senha]');
            const confirma = document.querySelector('input[name=confirma]');

            if (confirma.value === senha.value){
                confirma.setCustomValidity('');
            }else{
                confirma.setCustomValidity('as senhas não são iguais')
            }
        }
         function senhaOK(){
            alert("Senha iguais")
         }
    </script>

  


    <form name="cadastro" onsubmit="senhaOK()" action="post">
        <div>
            <label class=" m-3 form-label fs-5" for="">Nome:</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu nome" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">E-mail:</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="email" placeholder="Digite o seu E-mail" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Senha:</label>
            <input class=" m-3 form-control form-control-lg fs-5"  name="senha" type="password" placeholder="Digite sua senha" required onchange='confereSenha();' >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Confirme sua Senha:</label>
            <input class=" m-3 form-control form-control-lg fs-5"  name="confirma" type="password" placeholder="Confirme sua senha" required onchange='confere  Senha();' >
            
            <div>

            <button class=" m-3 btn btn-primary fs-5" type="submit">Enviar</button> <button class="  btn btn-primary fs-5" type="reset">Limpar</button>
            </div>
        </div>
    </form>

<?php require("footer.php")?>
