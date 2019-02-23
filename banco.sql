CREATE SCHEMA IF NOT EXISTS wsdb;

USE wsdb;

CREATE TABLE IF NOT EXISTS tb_alunos(

    matricula INT NOT NULL UNIQUE,
    nome VARCHAR(255) NOT NULL,
    notaDeAvaliacao FLOAT NOT NULL,
    PRIMARY KEY(matricula)
);

INSERT INTO tb_alunos VALUES(12345, 'Luan Araujo Silva', 10.0);
INSERT INTO tb_alunos VALUES(12346, 'Ana Cunha Cavalcanti', 3.0);
insert into tb_alunos values(12345, 'Luan Araujo Silva', 10) on duplicate key update nome = 'Luan Araujo Silva', notaDeAvaliacao = 10.0;


create table if not exists tb_enderecos (
    id int primary key auto_increment,
    cep varchar(15) not null,
    logradouro varchar(150) not null,
    bairro varchar(150) not null,
    cidade varchar(150) not null,
    estado varchar(150) not null,
    complemento varchar(250) not null
);
