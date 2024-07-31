<?php

    session_start(); // Iniciando a sessão ; 

    $usuario_autenticado = false ; // Variável que verifica se a autenticação foi realizada ; 
    $usuario_id = null ; // Variável que será responsável por identificar o ID do usuário ; 
    $usuario_perfil_id = null ; // Variável que indicará se o usuário autenticado é administrador, ou usuário normal ; 

    $perfis = array(1 => "Administrativo", 2 => "Usuário") ; // Array que indicará os tipos de usuário do sistema ; 

    $usuarios_sistema = array( // Criando de forma manual possíveis usuários para o Sistema para fazer a autenticação ; 
        array("id" => 1, "email" => "adm@teste.com.br", "senha" => "1234", "perfil_id" => 1) , 
        array("id" => 2, "email"=> "user@teste.com.br", "senha"=> "1234", "perfil_id" => 1) ,
        array("id" => 3, "email"=> "jose@teste.com.br", "senha"=> "1234", "perfil_id" => 2) ,
        array("id" => 4, "email"=> "maria@teste.com.br", "senha"=> "1234", "perfil_id" => 2)
    ); 

    foreach($usuarios_sistema as $usuario) { // Percorrendo o array de usuários no Sistema para verificar se o email e senha digitadfo pelo usuário existe, de modo a validar sua sessão ; 
        if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) { // Verificando se o email e a senha do usuário atual percorrido pelo for, são iguais a o usuário digitado pelo usuário ; 
            $usuario_autenticado = true ; // Atribuindo o valor de true a variável indicando que o usuário foi autenticado ; 
            $usuario_id = $usuario['id']; // Atribuindo o id do usuário autenticado a variável : 'usuário_id' ; 
            $usuario_perfil_id = $usuario['perfil_id']; // Atribuindo o id do perfil do usuário a variável : 'usuario_perfil_id' ;
        }
    }

    if($usuario_autenticado) { // Verificando se o usuário foi autenticado ; 
        echo "O usuário foi autenticado" ; 
        $_SESSION['autenticado'] = 'SIM' ; // Variável global criada para validar se o usuário é autenticado para permitir acesso as páginas, ou não ; 
        $_SESSION['id'] = $usuario_id ; // Atribuindo o valor da variável global ID, o id do usuário que foi autenticado ; 
        $_SESSION['perfil_id'] = $usuario_perfil_id ; // Atribuindo o valor da perfil id, o tipo de usuário do sistema ; 
        header("Location: home.php") ; // Função responsável pelo direcionamento de páginas caso o usuário esteja autenticado ; 
    }
    else {
        $_SESSION['autenticado'] = 'NÃO' ; // Variável global criada para validar se o usuário é autenticado para permitir acesso as páginas, ou não ; 
        header("Location: index.php?login=erro"); // Função responsável por encaminhar para a localização do parâmetro, quando a instrução for interpretada. O "login=erro", quando interpretada na página index.php, exibirá na tela uma mensage, de erro para o usuário indicando que o login ou senha estão inválidos; 
    }
?>