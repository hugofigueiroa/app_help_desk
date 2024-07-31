<?php 

    // Página criada para o reaproveitamento de código ; 
    
    session_start() ; // Iniciando a sessão ; 

    // Validando a variável global session, que validará se o usuário está autenticado ou não para liberação das páginas ;

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != "SIM") {
    header("Location: index.php?login=erro2");
    }
?>
