<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cadastro de Perfil</title>
  </head>
  <body>
    <div class="container">
        <div class="col-6 offset-3 mt-5">
            <fieldset>
                <legend class="text-center">Cadastro de Endereço</legend>
                <form action="registro.php" method="post">
                    <div class="form-group">
                        <label for="icep">CEP</label>
                        <input type="text" class="form-control" id="icep" name="txtcep" placeholder="Informe CEP" required>
                    </div>
                    <div class="form-group">
                        <label for="ilogradouro">Logradouro</label>
                        <input type="text" class="form-control" id="ilogradouro" name="txtlogradouro" placeholder="Informe Logradouro" required>
                    </div>
                    <div class="form-group">
                        <label for="ibairro">Bairro</label>
                        <input type="text" class="form-control" id="ibairro" name="txtbairro" placeholder="Informe Bairro" required>
                    </div>
                    <div class="form-group">
                        <label for="icidade">Cidade</label>
                        <input type="text" class="form-control" id="icidade" name="txtcidade" placeholder="Informe Cidade" required>
                    </div>
                    <div class="form-group">
                        <label for="iestado">Estado</label>
                        <input type="text" class="form-control" id="iestado" name="txtestado" placeholder="Informe Estado" required>
                    </div>
                    <div class="form-group">
                        <label for="icomplemento">Complemento</label>
                        <input type="text" class="form-control" id="icomplemento" name="txtcomplemento" placeholder="Informe Complemento" required>
                    </div>
                    <div class="form-group">
                        <p><small id="status" class="text-<?= $_SESSION['msg'][0] ?>"><?= isset($_SESSION['msg'][1]) ? $_SESSION['msg'][1] : '' ?></small></p>
                        <button type="submit" class="btn btn-success" id="btn_cadastrar">Cadastrar</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
<?php
    unset($_SESSION['msg']);

?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/cep.js"></script>
  </body>
</html>