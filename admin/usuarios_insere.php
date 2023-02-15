<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    
    if($_POST){
        
        $id_usuario = $_POST['id_usuario'];
        $login_usuario = $_POST['login_usuario'];
        $nivel_usuario = $_POST['nivel_usuario'];
        $senha_usuario = $_POST['senha_usuario'];

        $insereUser = "INSERT INTO  ti93phpdb01.tbusuarios
                     (id_usuario, login_usuario, nivel_usuario, senha_usuario)
                        VALUES 
                     ('$id_usuario','$login_usuario','$nivel_usuario', '$senha_usuario');
                 ";
        $resultado = $conn->query($insereUser);
        
        if(mysqli_insert_id($conn)){
            header('location: usuarios_lista.php');
        }
    }
        
        $consulta_fk = "select * from tbusuarios order by login_usuario";
        $lista_fk = $conn->query($consulta_fk);
        $row_fk = $lista_fk->fetch_assoc();
        $nlinhas = $lista_fk->num_rows;

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
                        
                                <label for="nivel_usuario">Nível:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="nivel_usuario" id="nivel_usuario"
                                                class="form-control" placeholder="Digite o Nível"
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
