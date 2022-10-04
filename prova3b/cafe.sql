drop database if exists cafe;
create database cafe;
use cafe;
create table produtos (
id int auto_increment primary key ,
nome varchar(50),
preco double(10,2)
);
insert into produtos(nome,preco) 
values ("cafe", 5), 
("capuccino", 8), 
("pao de queijo", 5);