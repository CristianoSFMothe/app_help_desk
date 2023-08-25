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
    <a class="navbar-brand" href="#">
      <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">

                <form>
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" placeholder="Título">
                  </div>

                  <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control">
                      <option>Problemas de login e senha</option>
                      <option>Conexão de rede instável</option>
                      <option>Configuração de email</option>
                      <option>Atualizações de software</option>
                      <option>Remoção de vírus e malware</option>
                      <option>Problemas com impressoras</option>
                      <option>Recuperação de dados perdidos</option>
                      <option>Instalação de programas</option>
                      <option>Suporte para dispositivos móveis</option>
                      <option>Problemas de acesso a arquivos compartilhados</option>
                      <option>Lentidão do computador</option>
                      <option>Configuração de firewall</option>
                      <option>Problemas de hardware</option>
                      <option>Suporte para software específic</option>
                      <option>Configuração de VPN</option>
                      <option>Criação Usuário</option>
                      <option>Impressora</option>
                      <option>Problemas com periféricos (teclado, mouse, etc.)</option>
                      <option>Assistência com backups</option>
                      <option>Configuração de Wi-Fi.</option>
                      <option>Configuração de contas de usuário</option>
                      <option>Problemas de travamento de aplicativos</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>

                  <div class="row mt-5">
                    <div class="col-6">
                      <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
                    </div>

                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>