<html charset="utf-8">
<head>
    <title>::Bibliotiba::</title>
    <meta charset="UTF-8">
   

</head>
<body>
    <style>
.menuUser{

    color:Orchid;
    font-size: 28px;
    border:2px plum solid;
    border-radius: 5px 0px 5px 0px;
    width:300px;
}
.menuUser:hover{ 
    color:BlueViolet;
    font-size: 28px;
    border:2px plum solid;
    border-radius: 5px 0px 5px 0px;
    width:300px;
    background-color: MediumOrchid;
}
a{text-decoration: none;}
.menuConteudo{ 
    width:800px; 
    height:600px;
    border:2px red solid;
    position:relative;
    left:320px;
}
.menuContainner{
position:fixed;
    float:left;
}
 #conteudo{padding: 15px;}
</style>
<div class="menuContainner" id="menuContainner">

    <div class="menuUser"><a   href="../home.html">Início</div>
    <div class="menuUser"><a   href="consultalivro.php">Consultar livro</a></div>
    <div class="menuUser"><a   href="">Reservar livro</a></div>
    <div class="menuUser"><a   href="">Devolver livro</a></div>
    <div class="menuUser"><a   href="cadastrolivro.php">Cadastrar livro</a></div>
    <div class="menuUser"><a   href="">Remover livro</a></div>
    <div class="menuUser"><a   href="">Editar livro</a></div>
    <div class="menuUser"><a   href="cadastrousuario.php">Cadastrar usuário</a></div>
    <div class="menuUser"><a   href="">Remover usuário</a></div>
    <div class="menuUser"><a   href="">Editar usuário</a></div>
    <div class="menuUser"><a   href="">Permissões de usuário</a></div>
    <div class="menuUser"><a   href="">Devoluções da semana</a></div>
    <div class="menuUser"><a   href="">Livros mais alugados</a></div>
    <div class="menuUser"><a   href="">Usuários que mais utilizam</a></div>
    <div class="menuUser"><a   href="">Pré-reserva</a></div>
    <div class="menuUser"><a   href="">Sugestões de livros</a></div>

</div>

<div class="menuConteudo" id="conteudo"><?php include_once("cadastro_livro.php");?></div>

</body>
</html>