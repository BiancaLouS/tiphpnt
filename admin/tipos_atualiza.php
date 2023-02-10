<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';

    if($_POST){

        $id_tipo = $_POST['id_tipo'];
        $sigla_tipo = $_POST['sigla_tipo'];
        $rotulo_tipo = $_POST['rotulo_tipo'];

        $id = $_POST['id_tipo'];

        $updateSql = "update tbtipos
                      set id_tipo = '$id_tipo',
                          sigla_tipo = '$sigla_tipo',
                          rotulo_tipo = '$rotulo_tipo',
                          
                          where id_tipo = $id;";
        
        $resultado = $conn->query($updateSql);
        if($resultado){
            header('location: tipos_lista.php');
        }
    }

    if($_GET){
        $id_form = $_GET['id_tipo'];
    } else{
        $id_form = 0;
    }
    $lista = $conn->query("select * from tbtipos where id_tipo = $id_form");
    $row = $lista->fetch_assoc();
    $numRows = $lista->num_rows;
        
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

        <title>Tipos Atualiza</title>
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
                    </a>                
                    <strong> Alterar Tipo </strong>
                </h2>
                  
                        <!-- Inserindo Produtos  -->

                    </h2>
                    <div class="thumbnail">
                        <div class="alert alert-danger" role="alert">
                            
                        <form action="tipos_atualiza.php" method="post" name="form_tipos_atualiza" enctype="multipart/form-data" id="form_tipos_atualiza">

                        <input type="hidden" name="id_tipo" id="id_tipo" value="<?php echo $row['id_tipo'] ?>">
                                    
                        <label for="rotulo_tipo">Tipo:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="rotulo_tipo" id="rotulo_tipo"
                                                class="form-control" placeholder="Digite o tipo"
                                                maxlength="100" value="<?php echo $row['rotulo_tipo'];?>">
                                    </div>

                                    <label for="sigla_tipo">Sigla:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="sigla_tipo" id="sigla_tipo"
                                                class="form-control" placeholder="Digite a Sigla"
                                                maxlength="100" value="<?php echo $row['sigla_tipo'];?>">
                                    </div>
                                    <br>
                                    <hr>
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-danger btn-block" value="Atualizar Tipo">      
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>