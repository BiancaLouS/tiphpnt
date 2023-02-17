<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    
    if($_POST){
        
        $id_usuario = $_POST['id_usuario'];
        $login_usuario = $_POST['login_usuario'];
        $senha_usuario = $_POST['senha_usuario'];
        $nivel_usuario = $_POST['nivel_usuario'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        $insereUser = "INSERT INTO  ti93phpdb01.tbusuarios
                     (id_usuario, login_usuario, senha_usuario, nivel_usuario, cpf, email)
                        VALUES 
                     ('$id_usuario','$login_usuario','$senha_usuario', '$nivel_usuario', '$cpf', '$email')
                 ";
        $resultado = $conn->query($insereUser);
        
        if(mysqli_insert_id($conn)){
            header('location: usuarios_lista.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilo2.css">

        <title>Usuários Insere</title>
    </head>

    <body class="fundofixo">
        <?php include "menu_adm.php";?>
        <main class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                    <h2 class="breadcrumb alert-danger center">
                        <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>                 
                        <strong> Adicione um Novo Usuário </strong>
                    </h2>
                  
                        <!-- Inserindo Produtos  -->

                    </h2>
                    <div class="thumbnail">
                        <div class="alert alert-danger" role="alert">
                            
                            <form action="usuarios_insere.php" method="post" name="form_usuarios_insere" enctype="multipart/form-data" id="form_usuarios_insere">
                                        
                                <label for="login_usuario">Login:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="login_usuario" id="login_usuario"
                                                class="form-control" placeholder="Digite o Login"
                                                maxlength="100" required>
                                    </div>     

                                <label for="email">E-mail:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                        </span>
                                        <input type="email" name="email" id="email"
                                                class="form-control" placeholder="Digite o E-mail"
                                                maxlength="100" required>
                                    </div>

                                <label for="cpf">CPF:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="cpf" id="cpf"
                                                class="form-control" placeholder="Digite o CPF"
                                                maxlength="100" required>
                                    </div>

                                <label for="senha_usuario">Senha:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="senha_usuario" id="senha_usuario"
                                                class="form-control" placeholder="Crie uma Senha"
                                                maxlength="100" required>
                                    </div>   

                                    <br>
                                    <hr>
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-danger btn-block" value="Cadastrar Novo Usuário">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
