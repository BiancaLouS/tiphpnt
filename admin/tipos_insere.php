<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    
    if($_POST){
        
        $id_tipo = $_POST['id_tipo'];
        $sigla_tipo = $_POST['sigla_tipo'];
        $rotulo_tipo = $_POST['rotulo_tipo'];

        $InsereTipo = "INSERT INTO  tbtipos
                     (id_tipo, sigla_tipo, rotulo_tipo)
                        VALUES 
                     ('$id_tipo','$sigla_tipo','$rotulo_tipo');
                 ";
        $resultado = $conn->query($InsereTipo);
        
        if(mysqli_insert_id($conn)){
            header('location: tipos_lista.php');
        }
    }
        
        $consulta_fk = "select * from tbtipos order by rotulo_tipo";
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

        <title>Tipos Insere</title>
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
                        <strong> Adicione um Novo Tipo </strong>
                    </h2>
                  
                        <!-- Inserindo Produtos  -->

                    </h2>
                    <div class="thumbnail">
                        <div class="alert alert-danger" role="alert">
                            
                            <form action="tipos_insere.php" method="post" name="form_tipos_insere" enctype="multipart/form-data" id="form_tipos_insere">
                                        
                                    <label for="rotulo_tipo">Novo Tipo:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="rotulo_tipo" id="rotulo_tipo"
                                                class="form-control" placeholder="Digite o Novo Tipo"
                                                maxlength="100" required>
                                    </div>

                                    <label for="sigla_tipo">Nova Sigla:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="sigla_tipo" id="sigla_tipo"
                                                class="form-control" placeholder="Digite a Nova Sigla"
                                                maxlength="100" required>
                                    </div>

                                    <br>
                                    <hr>
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-danger btn-block" value="Cadastrar Novo Tipo">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
