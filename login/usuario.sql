CREATE DATABASE banco;
use banco;
CREATE TABLE tabela(
  login varchar(50) primary key,
  senha varchar(50) NOT NULL
);
insert into tabela values ("bianca.ifsp@gmail.com",md5("123"));
select * from tabela;