

create database if not exists cadastro
default character set utf8
default collate utf8_general_ci;
use cadastro;

create table if not exists empresas(
codigo int not null auto_increment,
razao_social Varchar(45) not null unique,
nome_fantasia varchar(45) not null,
cnpj varchar(18) not null unique,
ddd int not null,
telefone varchar(10) not null,
primary key (codigo)

)default charset = utf8;

select * from empresas;

select * from empresas where razao_social like '%mp%' or nome_fantasia like '%mp%';

delete from empresas where codigo =1 ;



 

