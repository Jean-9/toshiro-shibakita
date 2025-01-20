CREATE TABLE dados (
    AlunoID int PRIMARY KEY, 
    Nome varchar(50) NOT NULL, 
    Sobrenome varchar(50) NOT NULL, 
    Endereco varchar(150),
    Cidade varchar(50), 
    Estado varchar(50), 
    Pais varchar(50), 
    CEP varchar(20),
    DataNascimento date, 
    Email varchar(100), 
    Telefone varchar(20), 
    Curso varchar(100), 
    DataMatricula date, 
    StatusMatricula varchar(20),
    Host varchar(50)
);
