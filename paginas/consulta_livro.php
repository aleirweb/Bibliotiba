

<html >
    
    <head><title></title>
        <meta charset="UTF-8">
    <style>

        .campo_{

            width:420px;
            height:50px;
            border: solid 2px purple;
            font-size:30px;
            border-radius: 5px 0px 5px 0px;
        }
        .textInput{font-size:26px; color:purple;}
        .btnCadLivro{color:white; width:120px;height:50px; border-radius: 5px 0px 5px 0px;font-size:15px; background-color: green;}
        .campo_textarea{width:300px;height:100px;border: solid 2px purple;}
        .classCadLivro{;width:440px;border-radius: 5px 0px 5px 0px;}
    </style>
    
    
    </head>
    <body>
        <div class="classCadLivro">
        <table>

            <form action="consultarlivro.php" name="formCadLivro" id="formCadLivro" method="post">
                

                <tr><td><input type="text" id="" class="campo_" name="campo_nome" placeholder="Nome ou parte do nome"></td></tr>
                <tr><td><input type="text" id="" class="campo_" name="campo_autor" placeholder="Autor(es)"> </td></tr>
                <tr><td><input type="text" id="" class="campo_" name="campo_codigo" placeholder="Código"> </td></tr>

           
            <tr><td align="right"><input type="submit" id="" class="btnCadLivro" name="" value="Pesquisar livro"></td></tr>
                

            </form>

        </table>
    </div>
    </body>
</html>