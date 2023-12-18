

<html charset="UTF-8">
    <head><title></title>
    <style>

        .campo_{

            width:300px;
            height:50px;
            border: solid 2px purple;
            font-size:20px;
            border-radius: 5px 0px 5px 0px;
        }
        .textInput{font-size:20px; color:purple;}
        .btnCadLivro{color:white; width:134px;height:50px; border-radius: 5px 0px 5px 0px;font-size:15px; background-color: green;}
        .campo_textarea{width:300px;height:100px;border: solid 2px purple;}
        .classCadLivro{;width:499px;border-radius: 5px 0px 5px 0px;}
    </style>
    
    
    </head>
    <body>
        <div class="classCadLivro">
        <table>

            <form action="" name="formCadLivro" id="formCadLivro" method="post">
                

                <tr><td><label class="textInput" for="campo_nome">Nome Completo<font color="red">*</font></label></td><td><input type="text" id="" class="campo_" name="campo_nome" required></td></tr>
                <tr><td><label class="textInput" for="campo_serie">Série/curso/turma <font color="red">*</font></label></td><td><input type="text" id="" class="campo_" name="campo_serie" placeholder="Exemplo: 2IPI2" required> </td></tr>
                <tr><td><label class="textInput" for="campo_nascimento">Data Nasc.</label></td><td><input type="text" id="" class="campo_" name="campo_nascimento"> </td></tr>
                <tr><td><label class="textInput" for="campo_celular">Celular</label></td><td><input type="text" id="" class="campo_" name="campo_celular"> </td></tr>
                <tr><td><label class="textInput" for="campo_nomeResponsável">Nome do responsável</label></td><td><input type="number" id="" class="campo_" name="campo_nomeResponsável"> </td></tr>
                <tr><td><label class="textInput" for="campo_celResponsavel">Telefone do responsável <font color="red">*</font></label></td><td><input type="text" id="" class="campo_" name="campo_celResponsavel" required> </td></tr>
                <tr><td><label class="textInput" for="campo_endereco">Endereço</label></td><td><textarea id="" class="campo_textarea" name="campo_endereco" placeholder="Digite seu endereço completo"></textarea> </td></tr>
                <tr><td colspan="2" align="right"><input type="submit" id="" class="btnCadLivro" name="campo_codigo" value="Cadastrar usuário"></td></tr>
                

            </form>

        </table>
    </div>
    </body>
</html>