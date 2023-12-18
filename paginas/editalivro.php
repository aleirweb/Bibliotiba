<?php 

@$peganome = $_POST['campo_nome'];
@$pegaautor = $_POST['campo_autor'];
$pegacodigo = $_POST['campo_codigo'];
@$pegaeditora = $_POST['campo_editora'];
@$peganedicao = $_POST['campo_nedicao'];
@$peganpaginas = $_POST['campo_npaginas'];
@$pegadescricao = $_POST['campo_descricao'];


include_once("menu.html");
?>


<div class="menuConteudo" id="conteudo">
    <?php include_once("consulta_livro.php");?>
    <?php include_once("editarlivro.php");?>
</div>

</body>
</html>