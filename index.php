<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Help Desk</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css" />

</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="header navbar-brand" href="#">
      <img src="./assents/img/logo.png" width="30" class="d-inline-block align-top" alt="logotipo help desk">
      App Help Desk
    </a>  
  </nav>

  <div class="card-login">
    <div class="card">
      <div class="card-header" id="form-login">
        Login
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Senha">
          </div>
          <button name="btnSubmit" class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>