<?php
  require('./funcoes.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = json_decode(file_get_contents('php://input'), true);

    if(setAluno($aluno['matricula'], $aluno['nome'], $aluno['notaDeAvaliacao'])) {
      echo "Dados gravados com sucesso";
    } else {
        echo json_encode(Array("status" => "500"));
    }

  } else if($_SERVER['REQUEST_METHOD'] === 'GET') {
    if($_GET['aluno'] !== '') {
      echo json_encode(getAlunoById($_GET['aluno']));
    } else {
      echo json_encode(getAlunos());
    }

  } else if($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $aluno = json_decode(file_get_contents('php://input'), true);

    if(updateAluno($aluno['id'], $aluno['nome'], $aluno['matricula'], $aluno['notaDeAvaliacao'])) {
        echo json_encode(Array("status" => "200"));
    } else {
        echo json_encode(Array("status" => "500"));
    }

  } else if($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = json_decode(file_get_contents('php://input'), true);

    if(deleteAluno($id['id'])) {
        echo json_encode(Array("status" => "200"));
    } else {
        echo json_encode(Array("status" => "500"));
    }
  }