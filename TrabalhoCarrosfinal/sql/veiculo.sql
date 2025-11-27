create database veiculo;
use veiculo;
create table veiculo(
id INT AUTO_INCREMENT PRIMARY KEY, 
placa varchar(7) unique not null,
renevan int (11) unique not null,
ano int (4) not null,
marca varchar (50) not null,
modelo varchar (50) not null,
cor varchar (50) not null,
combustivel varchar (90) not null
);