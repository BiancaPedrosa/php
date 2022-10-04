drop database if exists cadastro;
create database cadastro;
use cadastro;
create table clientes (
id varchar(50) primary key ,
nome varchar(50),
telefone varchar(50),
senha  varchar(100)
);
insert into clientes  values ("bianca@ifsp.edu.br", "Bianca", "12345","ifsp"),
 ("agord@ifsp.edu.br", "Agord", "54321","ifsp");