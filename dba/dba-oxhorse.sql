create database oxhorse;
use oxhorse;

create table usuario (
	id int not null auto_increment primary key,
	nomeUsuario varchar(255) not null,
	nomeCompleto varchar(255) not null,
	email varchar(255) not null,
	senha varchar(255) not null,
	token varchar(255) not null
);

delete from usuario;
select * from usuario;