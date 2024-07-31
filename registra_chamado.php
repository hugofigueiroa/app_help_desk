<?php 

    session_start() ; // Iniciando a sessão ;

    // TRABALHANDO NA MONTAGEM DO TEXTO A SER ESCRITO ; 

    // Verificando se no texto digitado pelo usuário, tem algum caractere 'joig da velha', caso tenha será substituído pelo ífen ; 
    $titulo = str_replace('#', '-', $_POST['titulo']) ; 
    $categoria = str_replace('#', '-', $_POST['categoria']) ; 
    $descricao = str_replace('#', '-', $_POST['descricao']) ; 

    // TRABALHANDO DIRETAMENTE COM ARQUIVO, ABRINDO, ESCREVENDO E FECHANDO ; 

    $arquivo = fopen("./arquivo.txt", "a"); // Abrindo um arquivo de texto que conterá os registros de chamado e atribuindo a variável 'arquivo', e o segundo parâmetro do metódo indica que abriremos o arquivo para escrita; 

    $texto = $_SESSION['id'] . "#" . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL ; // Atribuindo a variável texto, o título, a categoria, e a descrição informada pelo usuário ; 
    
    fwrite($arquivo, $texto) ; // Escreverá no arquivo o chamado informado pelo usuário ; 

    fclose($arquivo) ; // Fechando o arquivo de texto que foi aberto ; 

    header('Location: abrir_chamado.php') ; // Abrindo a página 'abrir chamado' assim que o chamado atual for registrado ; 
?>