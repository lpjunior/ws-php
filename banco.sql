CREATE SCHEMA IF NOT EXISTS avaliacao;

USE avaliacao;

CREATE TABLE IF NOT EXISTS tb_alunos(

    matricula INT NOT NULL UNIQUE,
    nome VARCHAR(255) NOT NULL,
    notaDeAvaliacao FLOAT NOT NULL,
    PRIMARY KEY(matricula)
);

INSERT INTO tb_alunos VALUES(12345, 'Luan Araujo Silva', 10.0);
INSERT INTO tb_alunos VALUES(12346, 'Ana Cunha Cavalcanti', 3.0);
