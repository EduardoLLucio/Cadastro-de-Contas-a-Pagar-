create database login
use login


CREATE TABLE usuario (
  idusuario INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(200) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  nome varchar(100) not null,
  data_cadastro datetime not null,
  PRIMARY KEY (idusuario)
);

create table despesa (
iddespesa int not null auto_increment,
empresa varchar(200) not null,
despesa varchar(200) not null,
descricao varchar(200) not null,
vencimento date not null,
valor varchar(15) not null,
primary key (iddespesa)
);

  
select * from usuario;

select * from despesa;

insert into usuario (usuario, senha) values('teste', md5('teste1'));


truncate usuario