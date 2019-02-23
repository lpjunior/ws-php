<?php
    require('./conexao.php');

    function setAluno($matricula, $nome, $notaDeAvaliacao){
        $link = getConnection();
   
        $query = "insert into tb_alunos values({$matricula}, '{$nome}', {$notaDeAvaliacao}) on duplicate key update nome = '{$nome}', notaDeAvaliacao = {$notaDeAvaliacao};";
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
            $listaAlunos = Array();
            while ($row = mysqli_fetch_assoc($rs)) {
                array_push($listaAlunos, $row);
            }
            return $listaAlunos;
        } catch (\Throwable $th) {
            throw new \Exception("Error ao listar", 1);
            return Array();
        }
    }
    function getAlunoById($id){
        $link = getConnection();

        $query = "select * from tb_alunos where matricula = {$id}";

        try {
            $rs = mysqli_query($link, $query);
            return mysqli_fetch_assoc($rs);
        } catch (\Throwable $th) {
            throw new \Exception("Error ao localizar o aluno", 1);
            return Array();
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