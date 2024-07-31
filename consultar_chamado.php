<?php
  require_once ("validador_acesso.php");
?>

<?php

  $chamados = array() ;// Declarando o array que conterá os chamados ; 


  $arquivo = fopen("arquivo.txt","r"); // Abrindo o arquivo de texto, e atribuindo a variável, que será o responsável por exibir os chamados para o usuário ; 

  while(!feof($arquivo)) { // Percorrendo o arquivo enquanto houver registro (linhas) a serem recuperadas ; 
    $registro = fgets($arquivo); // Usada para ler a linha do arquivo e atribuindo a uma variável; 
    $chamados[] = $registro ; // Atribuindo ao array que conterá os registros, a linha na qual o while está percorrendo no momento ; 
  }

  fclose($arquivo); // Fechando o arquivo ; 
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
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

      <div class="card-consultar-chamado">
        <div class="card"> <!--Início do cartão-->
          <div class="card-header"> <!--Início do cabeçalho do cartão-->
            Consulta de chamado
          </div> <!--Fim do cabeçalho do cartão-->

          <div class="card-body"> <!--Início do corpo do cartão-->

          <?php
            foreach($chamados as $chamado) {
          ?>

          <?php 

            $chamados_dados = explode("#", $chamado);

            // Verificando se o perfil do usuário é administrativo ou não ; 

            if($_SESSION['perfil_id'] == 2) { // Só iremos exibir o chamado se ele foi criado pelo usuário ; 
              if($_SESSION['id'] != $chamados_dados[0]) { // Verificando se o id do usuário, é diferente ao do usuário que fez o chamado ; 
                continue ; 
              }
            }

            if(count($chamados_dados) < 4) {
              continue ;
            }
          ?>

            <div class="card mb-3 bg-light">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $chamados_dados[1]?> </h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamados_dados[2]?></h6>
                <p class="card-text"><?php echo $chamados_dados[3]?></p>
              </div>
            </div>

          <?php
            }
          ?>

            <div class="row mt-5"> <!--Início da linha-->
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
            </div> <!--Fim da linha-->
          </div> <!--Fim do corpo do cartão-->
        </div>
      </div> <!--Fim do cartão-->
    </div> <!--Fim da linha-->
  </div> <!--Fim do container do conteúdo-->
</body>

</html>