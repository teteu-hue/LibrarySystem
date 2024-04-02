<form action="acao.php" method="post">
    <pre>
        <label for="">Nome do Livro</label>
        <input type="text" name="nameBook" id="">

        <select name="genderBook" size="<?php count($genderBooks)?>" id="">          
            <?php for($i = 0; $i < count($genderBooks); $i++){ ?>
                
                <option value="<?php echo $genderBooks[$i]->getIdGenderBook()?>">
                    <?php echo $genderBooks[$i]->getName()?>
                </option>

            <?php }?>

        </select>

        <label for="">Preço do Livro</label>
        <input type="number" step="0.01" name="price">
        

        <label for="">Número de Páginas</label>
        <input type="number" name="numPage">

        <button type="submit">Enviar</button> <button type="reset">Limpar</button>

    </pre>

</form>