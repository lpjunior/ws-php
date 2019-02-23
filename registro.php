<?php
  require('./conexao.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cep = $_POST['txtcep'];
    $logradouro = $_POST['txtlogradouro'];
    $bairro = $_POST['txtbairro'];
    $cidade = $_POST['txtcidade'];
    $estado = $_POST['txtestado'];
    $complemento = $_POST['txtcomplemento'];

    $link = getConnection();
   
    $query = "insert into tb_enderecos values(null, '{$cep}', '{$logradouro}', '{$bairro}', '{$cidade}', '{$estado}', '{$complemento}')";
    try {
        mysqli_query($link, $query);
        return true;
    } catch (\Throwable $th) {
        throw new \Exception("Error ao gravar", 1);
        return false;
    }
  }