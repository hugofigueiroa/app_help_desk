<html>
<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark"> <!--Início da navegação-->
    <a class="navbar-brand" href="#"> <!--Início do logo-->
      <img src="./Imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a> <!--Fim do logo-->
  </nav> <!--Fim da navegação-->



  <div class="container"> <!--Início do container do conteúdo-->
    <div class="row"> <!--Início da linha-->
      <div class="card-login">
        <div class="card"> <!--Início do cartão -->
          <div class="card-header"> <!--Início do cabeçalho do cartão-->
            Login
          </div> <!--Fim do cabeçalho do cartão-->
          <div class="card-body"> <!--Início do corpo do cartão-->
            <form action="http://localhost/valida_login.php" method="post">
              <!--O atributo "action" é o destino de onde irá o formulário / O atributo "method" post, serve para que os dados digitados pelo usuário não sejam anexados na URL-->
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <?php
                // Verificando se o login informado pelo usuário é válido, caso não seja a página ("valida_login.php") enviará na requisição uma mensagem de erro. Na qual verificarei se contém erro, e caso contenha exibirá para o usuário ; 
                if (isset($_GET['login']) && $_GET['login'] == 'erro') { // Função responsável por verificar se o indíce existe, antes de utilizá-lo ; 
              ?>
                <div class="text-danger"> <!--Esse bloco de código será entregue pelo usuário somente se a vericação feita no bloco PHP acima for verdadeira ; -->
                  Usuário ou senha inválido(s)
                </div>

              <?php } ?>

              <?php
                // Verificando se o login informado pelo usuário é válido, caso não seja a página ("valida_login.php") enviará na requisição uma mensagem de erro. Na qual verificarei se contém erro, e caso contenha exibirá para o usuário ; 
                if (isset($_GET['login']) && $_GET['login'] == 'erro2') { // Função responsável por verificar se o indíce existe, antes de utilizá-lo ; 
              ?>
                <div class="text-danger"> <!--Esse bloco de código será entregue pelo usuário somente se a vericação feita no bloco PHP acima for verdadeira ; -->
                  Faça login antes de acessar as páginas protegias
                </div>

              <?php } ?>



              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </div> <!--Fim do corpo do cartão-->
        </div> <!--Fim do cartão-->
      </div>
    </div> <!--Fim da linha-->
  </div> <!--Fim do container do conteúdo-->
</body>

</html>