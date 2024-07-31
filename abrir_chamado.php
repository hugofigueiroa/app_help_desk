<?php
    require_once("validador_acesso.php");
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>

      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
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
      <ul class="navbar-nav"> <!--Início do "botão" de sair-->
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">Sair</a>
        </li>
      </ul> <!--Fim do botão de sair-->
    </nav> <!--Fim da navegação-->

    <div class="container"> <!--Início do container do conteúdo-->     
      <div class="row"> <!--Início da linha-->

        <div class="card-abrir-chamado">
          <div class="card"> <!--Início do cartão-->
            <div class="card-header"> <!--Início do cabeçalho do cartão-->
              Abertura de chamado
            </div> <!--Fim do cabeçalho do cartão-->
            <div class="card-body"> <!--Início do corpo do cartão-->
              <div class="row"> <!--Início da linha-->
                <div class="col"> <!--Início da coluna-->
                  
                  <form method="post" action="registra_chamado.php"> <!--Início do formulário-->

                    <div class="form-group">
                      <label>Título</label>
                      <input name ="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5"> <!--Início da linha-->
                        <div class="col-6"> <!--Início da primeira coluna-->
                          <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                        </div> <!--Fim da primeira coluna-->

                        <div class="col-6"> <!--Início da segunda coluna-->
                          <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                        </div> <!--Fim da segunda coluna-->
                    </div> <!--Fim da linha-->
                  </form> <!--Fim do formulário-->

                </div> <!--Fim da coluna-->
              </div> <!--Fim da linha-->
            </div><!--Fim do corpo do cartão-->
          </div> <!--Fim do cartão-->
        </div> <!--Fim da linha-->
    </div> <!--Fim do container do conteúdo-->
  </body>
</html>