
<html charset="UTF-8">
    <head><title></title>
    <style>

        .campo_{

            width:300px;
            height:50px;
            border: solid 2px purple;
            font-size:30px;
            border-radius: 5px 0px 5px 0px;
        }
        .textInput{font-size:26px; color:purple;}
        .btnCadLivro{color:white; width:120px;height:50px; border-radius: 5px 0px 5px 0px;font-size:15px; background-color: green;}
        .campo_textarea{width:300px;height:100px;border: solid 2px purple;}
        .classCadLivro{width:440px;border-radius: 5px 0px 5px 0px;}
    </style>
    
    
    </head>
    <body>
        <div class="classCadLivro">
        <table>

            <form action="incluirlivro.php" name="formCadLivro" id="formCadLivro" method="post">
                

                <tr><td><label class="textInput" for="campo_nome">Nome <font color="red">*</font></label></td><td><input type="text" id="" class="campo_" name="campo_nome" required></td></tr>
                <tr><td><label class="textInput" for="campo_autor">Autor(es) <font color="red">*</font></label></td><td><input type="text" id="" class="campo_" name="campo_autor" required> </td></tr>
                <tr><td><label class="textInput" for="campo_editora">Editora</label></td><td><input type="text" id="" class="campo_" name="campo_editora"> </td></tr>
                <tr><td><label class="textInput" for="campo_nedicao">Nº Edição</label></td><td><input type="text" id="" class="campo_" name="campo_nedicao"> </td></tr>
                <tr><td><label class="textInput" for="campo_npaginas">Nº páginas</label></td><td><input type="number" id="" class="campo_" name="campo_npaginas"> </td></tr>
                <tr><td><label class="textInput" for="campo_codigo">Código <font color="red">*</font></label></td><td><input type="text" id="" class="campo_" name="campo_codigo" required> </td></tr>
                <tr><td><label class="textInput" for="campo_descricao">Descrição</label></td><td><textarea id="" class="campo_textarea" name="campo_descricao"></textarea> </td></tr>
                <tr><td colspan="2" align="right"><input type="submit" id="" class="btnCadLivro" name="" value="Cadastrar livro"></td></tr>
                

            </form>

        </table>
    </div>
    </body>
</html>