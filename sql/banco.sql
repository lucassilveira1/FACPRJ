create database projeto;

use projeto;

create table register(
id int auto_increment primary key,
Nome varchar(100),
DataNasc date,
Sexo varchar(20),
NomeMaterno varchar(100),
CPF varchar(14),
Celular varchar(15),
Fixo varchar(14),
Email varchar(80),
Endereco varchar(100),
CEP varchar(9),
Login varchar(6),
Senha varchar(8)
adm boolean DEFAULT 0);

insert into register(
    Nome,
    DataNasc,
    Sexo,
    NomeMaterno,
    CPF,
    Celular,
    Fixo,
    Email,
    Endereco,
    CEP,
    Login,
    Senha,
    ADM) 
        VALUES(
            'admin',
            '2001-05-16',
            'male',
            'admin',
            '222.222.211-33',
            '(21) 96577-7297',
            '(21) 2121-2121',
            'lucas@teste.com',
            'Rua Teste 23',
            '21061-680',
            'admin',
            'admin123',
            true
    );