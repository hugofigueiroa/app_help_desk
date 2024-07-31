<?php
    require_once("validador_acesso.php");
?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>

      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      
    </style>
  </head>

  <body>
    
    <nav class="navbar navbar-dark bg-dark"> <!--Início da navegação-->
      <a class="navbar-brand" href="#"> <!--Início do logo-->
        <img src="./Imagens/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
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

        <div class="card-home"> 
          <div class="card"> <!--Início do cartão -->
            <div class="card-header"> <!--Início do cabeçalho do cartão-->
              Menu
            </div> <!--Fim do cabeçalho do cartão-->
            <div class="card-body"> <!--Início do corpo do cartão-->
              <div class="row"> <!--Início da linha do corpo do cartão-->
                <div class="col-6 d-flex justify-content-center"> <!--Início da primeira coluna-->
                  <a href="abrir_chamado.php">
                    <img src="./Imagens/formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div> <!--Fim da primeira coluna-->
                <div class="col-6 d-flex justify-content-center"> <!--Início da segunda coluna-->
                  <a href="consultar_chamado.php">
                    <img src="./Imagens/formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div> <!--Fim da segunda coluna-->
              </div> <!--Fim da linha do corpo do cartão-->
            </div> <!--Fim do corpo do cartão-->
          </div> <!--Fim do cartão-->
        </div> <!--Fim da linha-->
    </div> <!--Fim do container do conteúdo-->
  </body>
</html>