<?php 
    session_name('chuleta');

    // Se sessão não esta aberta:
    
    if(!isset($_SESSION)){ /* Então... */ /* Se retornar Falso existe uma sessão aberta */
        session_start(); 
    }

    // Segurança Digital ...

    // Verificar se o usuário esta logado na sessão 

    if(!isset($_SESSION['login_user'])) // Se não existir sessão definida para esse cara, redirecionamos a sessão por Segurança
?>