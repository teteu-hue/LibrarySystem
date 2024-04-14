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
            <label class=" m-3 form-label fs-5" for="">Nome Completo:</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu nome" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Qual é sua Idade</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite sua idade" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Data de Nascimento</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="date" placeholder="Digite quando você nasceu" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">CPF</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu CPF" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">RG</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu RG" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Telefone/Celular</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="tel" placeholder="Digite seu telefone" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">E-mail:</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="email" placeholder="Digite o seu E-mail" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Rua</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite sua rua" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Numero da Residencia</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite o numero da sua residencia" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Complemento</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite o complemento" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Cidade</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite sua cidade" >
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">Estado</label>
            <select id="estado" name="estado">
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
        </div>
        <div>
            <label class=" m-3 form-label fs-5" for="">CEP</label>
            <input class=" m-3 form-control form-control-lg fs-5" type="text" placeholder="Digite seu CEP" >
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
