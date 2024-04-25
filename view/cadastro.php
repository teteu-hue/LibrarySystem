<?php require("header.php")?>
     <div class="corpo">
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

  


    <form  name="cadastro" onsubmit="senhaOK()" action="post">

    <h1 class="chama m-3 fs-1">Cadastro</h1>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Nome Completo:</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu nome" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Qual é sua Idade</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite sua idade" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Data de Nascimento</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="date" placeholder="Digite quando você nasceu" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">CPF</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu CPF" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">RG</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu RG" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Telefone/Celular</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="tel" placeholder="Digite seu telefone" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">E-mail:</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="email" placeholder="Digite o seu E-mail" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Rua</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite sua rua" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Numero da Residencia</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite o numero da sua residencia" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Complemento</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite o complemento" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Cidade</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite sua cidade" >
        </div>

        <div class="espaço">
            <label class=" m-3 form-label fs-1" for="">Estado</label>
            <select class="form-select form-select-sm"  id="estado" name="estado">
                <option class="option fs-5" value="AC">AC</option>
                <option class="option fs-5" value="AL">AL</option>
                <option class="option fs-5" value="AP">AP</option>
                <option class="option fs-5" value="AM">AM</option>
                <option class="option fs-5" value="BA">BA</option>
                <option class="option fs-5" value="CE">CE</option>
                <option class="option fs-5" value="DF">DF</option>
                <option class="option fs-5" value="ES">ES</option>
                <option class="option fs-5" value="GO">GO</option>
                <option class="option fs-5" value="MA">MA</option>
                <option class="option fs-5" value="MT">MT</option>
                <option class="option fs-5" value="MS">MS</option>
                <option class="option fs-5" value="MG">MG</option>
                <option class="option fs-5" value="PA">PA</option>
                <option class="option fs-5" value="PB">PB</option>
                <option class="option fs-5" value="PR">PR</option>
                <option class="option fs-5" value="PE">PE</option>
                <option class="option fs-5" value="PI">PI</option>
                <option class="option fs-5" value="RJ">RJ</option>
                <option class="option fs-5" value="RN">RN</option>
                <option class="option fs-5" value="RS">RS</option>
                <option class="option fs-5" value="RO">RO</option>
                <option class="option fs-5" value="RR">RR</option>
                <option class="option fs-5" value="SC">SC</option>
                <option class="option fs-5" value="SP">SP</option>
                <option class="option fs-5" value="SE">SE</option>
                <option class="option fs-5" value="TO">TO</option>
            </select>
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">CEP</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu CEP" >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Senha:</label>
            <input class=" m-3 form-control form-control-lg fs-5"  name="senha" type="password" placeholder="Digite sua senha" required onchange='confereSenha();' >
        </div>
        <div class="espaço">
            <label class=" m-3 form-label fs-5" for="">Confirme sua Senha:</label>
            <input class=" m-3 form-control form-control-lg fs-5"  name="confirma" type="password" placeholder="Confirme sua senha" required onchange='confere  Senha();' >
        
        </div>
        <div class="espaço">

            <button class=" m-3 btn btn-outline-success btn-sm fs-5" type="submit">Enviar</button> <button class="m-3 btn btn-outline-danger btn-sm fs-5" type="reset">Limpar</button>
        </div>
    </form>
    </div>

<?php require("footer.php")?>
