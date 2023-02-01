<?php 
    session_name('chuleta');

    // Se sessão não esta aberta:
    
    if(!isset($_SESSION)){ /* Então... */ /* Se retornar Falso existe uma sessão aberta */
        session_start(); 
    }

    // Segurança Digital ...

    // Verificar se o usuário esta logado na sessão 

    if(!isset($_SESSION['login_user'])){ // Se não existir sessão definida para esse cara, redirecionamos a sessão por Segurança
        header('location: login.php');
        exit;
    }

    $nome_da_sessao = session_name();
        if(!isset($_SESSION['nome_da_sessao'])
            OR ($_SESSION['nome_da_sessao']!=$nome_da_sessao)
        ){
            session_destroy();
            header('location: login.php');
            exit;
        }

?>