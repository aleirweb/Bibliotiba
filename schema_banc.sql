create database livraviaQuitiba;
use livraviaQuitiba;
create table livro(

nome varchar(100) not null,
autor varchar(50) not null,
editora varchar(50) not null,
nedicao int(3),
npaginas int(3),
codigo int(10) not null,
descricao varchar(500) not null,
primary key(codigo)

);