<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css" />

</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="header navbar-brand" href="index.php">
      <img src="./assents/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div id="form-login" class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="validar_login.php" method="post" onsubmit="return validarFormulario()" novalidate>
              <div class="form-group">
                <input name="email" id="email" type="email" class="form-control" placeholder="E-mail">
              </div>

              <div class="form-group">
                <input name="password" id="password" type="password" class="form-control" placeholder="Senha">
              </div>

              <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>
              <?php } ?>

              <div class="erro-login">
                <?php if (isset($_GET['login']) && $_GET['login'] == 'erro_login') { ?>
                  <div class="text-danger">
                    Faça login antes de acessar a página
                  </div>
                <?php } ?>
              </div>

              <button name="btnSubmit" class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div id="modal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="fecharModal()">&times;</span>
        <p>Por favor, preencha todos os campos.</p>
      </div>
    </div>

    <script src="js/validacao.js"></script>
  </div>

</body>

</html>