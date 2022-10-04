drop database if exists loja;
create database loja;
use loja;
create table produtos (
id int auto_increment primary key ,
nome varchar(50),
preco double(10,2)
);