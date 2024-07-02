create database IFSP;
use IFSP;
-- criando tabelas
create table cidade (
	id int auto_increment,
    nome varchar(50),
    estado varchar(02),
    primary key(id)
);
create table cliente (
	id int auto_increment,
    nome varchar(50),
    email varchar(50),
    senha varchar(10),
    ativo bool,
    id_cidade int,
    primary key(id),
    constraint fk_clientecidade foreign key(id_cidade) references cidade(id)
);
-- tabelas criadas
-- inserinto dados
insert into cidade (nome, estado) values
    ("São Paulo", "SP"),
    ("Araçatuba", "SP"),
    ("Porto Alegre", "RS"),
    ("Birigui", "SP"),
    ("Rio de Janeiro", "RJ");
-- dados inseridos
-- consulta
select nome from cidade where estado = 'SP';
-- inserindo dados
insert into cliente (nome, id_cidade) values
    ("Leticia", "SP"),
    ("Fabiana", "SP"),
    ("Paty", "RJ"),
    ("Nicoli", "SP"),
    ("Sabrina", "RS");
-- dados inseridos
-- consulta
select nome from cliente where id = 1 and estado = 'SP';
-- alterar
update nome set cidade = 'Bauru' where id = 1;
update cliente set nome = 'Cassio' where id = 1;
delete from cidade where id = 4;
delete from cliente where id = 1;
