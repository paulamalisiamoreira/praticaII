DROP DATABASE IF EXISTS solicitacoes;

CREATE DATABASE solicitacoes;

USE solicitacoes;

CREATE TABLE funcionário(
pk_funcionario INT PRIMARY KEY AUTO_INCREMENT,
nome_funcionario VARCHAR(50)
);

CREATE TABLE cliente(
pk_cliente INT PRIMARY KEY AUTO_INCREMENT,
nome_cliente VARCHAR(50),
email_cliente VARCHAR(50),
cpf_clinte VARCHAR(11),
telefone_cliente VARCHAR(11)
);

CREATE TABLE solicitacao(
pk_solicitacao INT PRIMARY KEY AUTO_INCREMENT,
titulo VARCHAR(50),
descricao VARCHAR(500),
urgencia varchar(15),
estatus VARCHAR(15),
data_abertura date,

fk_cliente int not null,
FOREIGN KEY (fk_cliente) REFERENCES cliente(pk_cliente),
fk_funcionario int not null,
FOREIGN KEY (fk_funcionario) REFERENCES funcionário(pk_funcionario)
);





