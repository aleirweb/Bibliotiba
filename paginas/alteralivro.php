<?php

@$peganome = $_POST['cnome'];
@$pegaautor = $_POST['cautor'];
@$pegaeditora = $_POST['ceditora'];
@$peganedicao = $_POST['cnedicao'];
$peganpaginas = $_POST['cnpaginas'];
 echo $pegacodigo = $_POST['ccodigo'];
@$pegadescricao = $_POST['cdescricao'];


 try {

  $banco = new PDO('mysql:host=localhost;dbname=livraviaQuitiba', 'root','')or print (mysql_error());
  print "Conexão Efetuada com sucesso!";

  } catch (PDOException $e) {
    echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
  }
     echo  $sql = " UPDATE livro SET nome ='".$peganome.
      "',autor = '".$pegaautor.
      "',editora = '".$pegaeditora.
      "',nedicao = '".$peganedicao.
      "',npaginas = '".$peganpaginas.
      "',descricao = '".$pegadescricao.
      "' WHERE codigo = '".$pegacodigo."'";

      $query = $banco->prepare($sql);
      $query->execute();
      //echo "<script>alert('ALTERAÇÃO FEITA COM SUCESSO!');</script>";
      //echo "<meta http-equiv='refresh' content='0;url=consultalivro.php'>";
      


  ?>