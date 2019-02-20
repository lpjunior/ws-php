<?php
    require('./conexao.php');

    function setAluno($nome, $email, $notaDeAvaliacao){
        $link = getConnection();

        $query = "insert into tb_alunos values(null, '{$nome}', '{$email}', {$notaDeAvaliacao})";
        try {
            mysqli_query($link, $query);
            return true;
        } catch (\Throwable $th) {
            throw new \Exception("Error ao gravar", 1);
            return false;
        }
    }

    function getAlunos(){
        $link = getConnection();

        $query = "select * from tb_alunos";
        try {
            $rs = mysqli_query($link, $query);
            $listaAlunos = new Array();
            while ($row = mysqli_fetch_row($rs)) {
                array_push($listaAlunos, $row);
            }
            return $listaAlunos;
        } catch (\Throwable $th) {
            throw new \Exception("Error ao listar", 1);
            return new Array();
        }
    }
    function getAlunoById($id){
        $link = getConnection();

        $query = "select * from tb_alunos where id = {$id}";
        try {
            $rs = mysqli_query($link, $query);
            return mysqli_fetch_row($rs);
        } catch (\Throwable $th) {
            throw new \Exception("Error ao localizar o aluno", 1);
            return new Array();
        }
    }
    function updateAluno($id, $nome, $email, $notaDeAvaliacao){
        $link = getConnection();

        $query = "update tb_alunos set nome = '{$nome}', email = '{$email}', notaDeAvaliacao = {$notaDeAvaliacao} where id = {$id}";

        try {
            mysqli_query($link, $query);
            return true;
        } catch (\Throwable $th) {
            throw new \Exception("Error ao atualizar", 1);
            return false;
        }
    }