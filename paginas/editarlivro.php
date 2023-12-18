<?php

@$nome = $_POST['campo_nome'];
//$autor = $_POST['campo_autor'];
//$codigo = $_POST['campo_codigo'];
echo "<style>.layout_campo{width:110px;}</style>";
echo "<table name='tb_consulta' id='tb_consulta' border='1'>";
echo "<form name='fr_consulta' id='fr_consulta' action='alteralivro.php' method='POST'>";

@$peganome = $_POST['campo_nome'];
@$pegaautor = $_POST['campo_autor'];
@$pegacodigo = $_POST['campo_codigo'];
@$pegaeditora = $_POST['campo_editora'];
@$peganedicao = $_POST['campo_nedicao'];
@$peganpaginas = $_POST['campo_npaginas'];
@$pegadescricao = $_POST['campo_descricao'];

 try {

  $banco = new PDO('mysql:host=localhost;dbname=livraviaQuitiba', 'root','')or print (mysql_error());
  //print "Conexão Efetuada com sucesso!";

  } catch (PDOException $e) {
    echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
  }


      $sql = "SELECT * FROM livro WHERE nome like'%$nome%' LIMIT 1";
      $query = $banco->prepare($sql);
      $query->execute();
      //$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

      echo "<tr><td>NOME</td><td>AUTOR</td><td>EDITORA</td><td>Nº EDICAO</td><td>Nº - PAGINAS</td><td>CÓDIGO</td><td>DESCRIÇÃO</td>";
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
      
        echo "<tr><td><input  value='".$peganome."' class='layout_campo' name='cnome'>".
             "</td><td><input  value='".$pegaautor."'class='layout_campo' name='cautor'>".
             "</td><td><input value='".$pegaeditora."'class='layout_campo' name='ceditora'>".
             "</td><td><input value='".$peganedicao."'class='layout_campo' name='cnedicao'>".
             "</td><td><input  value='".$peganpaginas."'class='layout_campo' name='cnpaginas'>".
             "</td><td><input  disabled='disabled' value='".$pegacodigo."'class='layout_campo' name='ccodigo'>".
             "</td><td><input  value='".$pegadescricao."'class='layout_campo' name='cdescricao'>".
             "</td><td><input type='submit' value='Modificar'></form>";
             
      }

    
       
    echo "</table>";

  ?>