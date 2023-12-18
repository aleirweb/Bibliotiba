<?php

$nome = $_POST['campo_nome'];
$autor = $_POST['campo_autor'];
$editora = $_POST['campo_editora'];
$nedicao = $_POST['campo_nedicao'];
$npaginas = $_POST['campo_npaginas'];
$codigo = $_POST['campo_codigo'];
$descricao = $_POST['campo_descricao'];


 try {

  $banco = new PDO('mysql:host=localhost;dbname=livraviaQuitiba', 'root','')or print (mysql_error());
  print "Conexão Efetuada com sucesso!";

  } catch (PDOException $e) {
    echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
  }
      $sql = "INSERT INTO livro(nome, autor,editora,nedicao,npaginas,codigo,descricao) VALUES ('$nome','$autor','$editora',$nedicao,$npaginas,$codigo,'$descricao'); ";
      $query = $banco->prepare($sql);
      $query->execute();
    echo "<script>alert('CADASTRADO COM SUCESSO!');</script>";
      echo "<meta http-equiv='refresh' content='0;url=cadastrolivro.php'>";
      


  ?>