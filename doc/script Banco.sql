-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Aluno (
idaluno INT PRIMARY KEY AUTO_INCREMENT,
nomeAluno varchar(50),
matricula varchar(50),
nota CHAR(2),
idendereco INT,
idturma INT,
idmensalidade INT
);

CREATE TABLE Endereco (
idendereco INT PRIMARY KEY AUTO_INCREMENT,
rua varchar(50),
numero varchar(50),
cep varchar(50),
estado varchar(50)
);

CREATE TABLE Turma (
idturma INT PRIMARY KEY AUTO_INCREMENT,
codturma VARCHAR(50),
quantidade int,
disciplina VARCHAR(50),
idprofessor INT
);

CREATE TABLE Professor (
idprofessor INT PRIMARY KEY AUTO_INCREMENT,
nomeProfessor varchar(50)
);

CREATE TABLE Mensalidade (
idmensalidade INT PRIMARY KEY AUTO_INCREMENT,
valor float,
data date
);

CREATE TABLE Usuario (
idusuario INT PRIMARY KEY AUTO_INCREMENT,
nome varchar(50),
senha varchar(50),
email varchar(50)
);

ALTER TABLE Aluno ADD FOREIGN KEY(idendereco) REFERENCES Endereco (idendereco);
ALTER TABLE Aluno ADD FOREIGN KEY(idturma) REFERENCES Turma (idturma);
ALTER TABLE Aluno ADD FOREIGN KEY(idmensalidade) REFERENCES Mensalidade (idmensalidade);
ALTER TABLE Turma ADD FOREIGN KEY(idprofessor) REFERENCES Professor (idprofessor);
