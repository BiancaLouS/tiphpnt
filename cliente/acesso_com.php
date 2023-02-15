<?php 
    session_name('chuleta');

   
    
    if(!isset($_SESSION)){ 
        session_start(); 
    }

    if(!isset($_SESSION['login_usuario'])){ 
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