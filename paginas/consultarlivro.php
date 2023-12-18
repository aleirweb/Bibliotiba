<?php

include_once("menu.html");

echo "<div class='menuConteudo' id='conteudo'>";
include_once("consulta_livro.php");

@$peganome = $_POST['campo_nome'];
@$pegaautor = $_POST['campo_autor'];
@$pegacodigo = $_POST['campo_codigo'];
@$pegaeditora = $_POST['campo_editora'];
@$peganedicao = $_POST['campo_nedicao'];
@$peganpaginas = $_POST['campo_npaginas'];
@$pegadescricao = $_POST['campo_descricao'];
//@$cnome = $_POST['cnome'];
//@$cautor = $_POST['cautor'];
//@$ccodigo = $_POST['ccodigo'];

echo "<table name='tb_consulta' id='tb_consulta' border='1'>";
echo "<form name='fr_consulta' id='fr_consulta' action='editalivro.php' method='POST'>";



 try {

  $banco = new PDO('mysql:host=localhost;dbname=livraviaQuitiba', 'root','')or print (mysql_error());
  //print "Conexão Efetuada com sucesso!";

  } catch (PDOException $e) {
    echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
  }
      $sql = "SELECT * FROM livro WHERE nome like'%$peganome%' limit 1";
      $query = $banco->prepare($sql);
      $query->execute();
      //$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

      echo "<tr><td>NOME</td><td>AUTOR</td><td>EDITORA</td><td>Nº EDICAO</td><td>Nº - PAGINAS</td><td>CÓDIGO</td><td>DESCRIÇÃO</td>";
      while($row = $query->fetch(PDO::FETCH_ASSOC)){
      
        echo "<tr><td>".$row['nome']."<input type='hidden' value='".$row['nome']."'name='campo_nome'>".
             "</td><td>".$row['autor']."<input type='hidden' value='".$row['autor']."'name='campo_autor'>".
             "</td><td>".$row['editora']."<input type='hidden' value='".$row['editora']."'name='campo_editora'>".
             "</td><td>".$row['nedicao']."<input type='hidden' value='".$row['nedicao']."'name='campo_nedicao'>".
             "</td><td>".$row['npaginas']."<input type='hidden' value='".$row['npaginas']."'name='campo_npaginas'>".
             "</td><td>".$row['codigo']."<input type='hidden' value='".$row['codigo']."'name='campo_codigo'>".
             "</td><td>".$row['descricao']."<input type='hidden' value='".$row['descricao']."'name='campo_descricao'>".
             "</td><td><input type='submit' value='Editar'></form>".
             "</td><td><form action='excluirlivro.php' method='POST'><input type='submit' value='Excluir'></td></tr></form>";
      }

    
       
    echo "</table>"; 

    echo "</div>";


  ?>