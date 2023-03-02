<?php 
    include "conn/connect.php";
    
    if($_POST){
        
        $id = $_POST['id'];
        $dataAtual = $_POST['dataAtual'];
        $dataFinal = $_POST['dataFinal'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $acompanhantes = $_POST['acompanhantes'];
        $id_status = $_POST['id_status'];

        $insereUser = "INSERT INTO  pedidoreserva
                     (id, dataAtual, dataFinal, nome, email, cpf, acompanhantes, id_status)
                        VALUES 
                     ('$id','$dataAtual','$dataFinal', '$nome', '$email', '$cpf', '$acompanhantes', '$id_status')
                 ";
        $resultado = $conn->query($insereR);
        
        if(mysqli_insert_id($conn)){
            header('location: index.php');
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
        <?php include "menu_publico.php";?>
        <main class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                    <h2 class="breadcrumb alert-danger center">
                        <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>                 
                        <strong> Solicitando Reserva </strong>
                    </h2>
                  
                        <!-- Inserindo Produtos  -->

                    </h2>
                    <div class="thumbnail">
                        <div class="alert alert-danger" role="alert">
                            
                            <form action="usuarios_insere.php" method="post" name="form_usuarios_insere" enctype="multipart/form-data" id="form_usuarios_insere">
                                        
                                <label for="dataAtual">Login:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="dataAtual" id="dataAtual"
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

                                <label for="dataFinal">Senha:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="dataFinal" id="dataFinal"
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
