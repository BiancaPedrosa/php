CREATE DATABASE estacionamento;


CREATE TABLE tabela_admin (
  ID int (10) NOT NULL AUTO_INCREMENT, 
  NomeUsuario varchar(120) DEFAULT NULL,
  Telefone bigint(10) DEFAULT NULL,
  Email varchar(200) DEFAULT NULL,
  Senha varchar(120) DEFAULT NULL,
  DataRegistroAdmin timestamp NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (ID)
);



INSERT INTO tabela_admin (ID,  NomeUsuario, Telefone, Email, Senha, DataRegistroAdmin) VALUES
(1, 'admin', 123456789, 'admin@gmail.com', md5('eusouodono'), '2021-10-22 16:50:00');





CREATE TABLE tabela_veiculo (
  ID int(10) NOT NULL AUTO_INCREMENT,
  NumeroEstacionamento varchar(120) DEFAULT NULL,
  Modelo varchar(120) DEFAULT NULL,
  Cor varchar(120) DEFAULT NULL,
  Marca varchar(120) DEFAULT NULL,
  Placa varchar(120) DEFAULT NULL,
  NomeProprietario varchar(120) DEFAULT NULL,
  TelefoneProprietario bigint(10) DEFAULT NULL,
  Entrada timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  Saida timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  TarifaEstacionamento varchar(120) NOT NULL,
  Convenio mediumtext  NULL,
  Status varchar(5) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE tabela_loja (
  ID_loja int(10) NOT NULL AUTO_INCREMENT,
  Nomeloja varchar(120) DEFAULT NULL,
  CEP varchar(120) DEFAULT NULL,
  TelefoneLoja varchar(120) DEFAULT NULL,
  Email varchar(120) DEFAULT NULL,
  PRIMARY KEY (ID_loja )
);


INSERT INTO tabela_veiculo (NumeroEstacionamento, Modelo, Cor, Marca, Placa, NomeProprietario, TelefoneProprietario, Entrada, Saida, TarifaEstacionamento, Convenio, Status) VALUES
('1', 'Gol', 'Preto','Volkswagen', 'AWL-6787', 'Tamanduá', 8956232528, '2022-10-31 08:00:00', null, null, null, null),
('2', 'Uno', 'Cinza', 'Fiat', 'PGR-8923', 'Macaco', 8989898989, '2022-10-31 08:00:00', null, null, null, null),
('3', 'Palio', 'Vermelho', 'Fiat', 'MJS-5389', 'Galinha', 7845123697, '2022-10-31 08:00:00', null, null, null, null),
('4', 'Celta', 'Verde', 'General Motors', 'KSM-4536', 'Onça', 2132654447, '2022-10-31 08:00:00', null, null, null, null),
('5', 'HB20', 'Azul', 'Hyundai', 'ARW-5596', 'Morcego', 4654654654, '2022-10-31 08:00:00', null, null, null, null),
('6', 'Gol', 'Preto','Volkswagen', 'AWL-6787', 'joaninha', 8956232528, '2022-10-31 08:00:00', null, null, null, null),
('7', 'Uno', 'Cinza', 'Fiat', 'PGR-8923', 'urso', 8989898989, '2022-10-31 08:00:00', null, null, null, null),
('8', 'Palio', 'Vermelho', 'Fiat', 'MJS-5389', 'beta', 7845123697, '2022-10-31 08:00:00', null, null, null, null),
('9', 'Celta', 'Verde', 'General Motors', 'KSM-4536', 'Abelha', 2132654447, '2021-10-31 08:00:00', null, null, null, null),
('15', 'HB20', 'Azul', 'Hyundai', 'ARW-5596', 'porco', 4654654654, '2022-10-31 08:00:00', null, null, null, null),
('16', 'HB20', 'preto', 'Hyundai', 'ARW-5596', 'cavalo', 4654654654, '2022-10-31 08:00:00', null, null, null, null),
('17', 'HB20', 'branco', 'Hyundai', 'ARW-5596', 'vaca', 4654654654, '2022-10-31 08:00:00', null, null, null, null),
('18', 'HB20', 'cinza', 'Hyundai', 'ARW-5596', 'boi', 4654654654, '2022-10-31 08:00:00', null, null, null, null),
('19', 'HB20', 'rosa', 'Hyundai', 'ARW-5596', 'tucano', 4654654654, '2022-10-31 08:00:00', null, null, null, null);

INSERT INTO tabela_loja (ID_loja, Nomeloja, CEP, Email, TelefoneLoja) VALUES
(1, 'Americanas', '12345-678', 'americanas@gmail.com','123456789');