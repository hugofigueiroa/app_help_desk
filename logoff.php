<?php
    // Removendo as variáveis de sessão para o usuário sair ; 
    session_start() ; // Iniciando a sessão ; 
    session_destroy() ; // Destrói a sessão em que o usuário se encontrava ; 
    header("Location: index.php"); // Forçando o redirecionamento para a página de Login ; 
?>