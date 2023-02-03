<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    
    if($_POST){
        if(isset($_POST['enviar'])){
            $nome_img = $_FILES['imagem_produto']['name'];
            $tmp_img = $_FILES['imagem_produto']['tmp_name'];
            $dir_img = "../images/".$nome_img;
            move_uploaded_file($tmp_img, $dir_img);
        }
        
        $id_tipo_produto = $_POST['id_tipo_produto'];
        $destaque_produto = $_POST['destaque_produto'];
        $descri_produto = $_POST['descri_produto'];
        $resumo_produto = $_POST['resumo_produto'];
        $valor_produto = $_POST['valor_produto'];
        $imagem_produto = $_FILES['imagem_produto']['name'];

        $insereProd = "INSERT INTO  tbprodutos
                     (id_tipo_produto, destaque_produto, descri_produto, resumo_produto, valor_produto, imagem_produto);

                        VALUES 
                     ('$id_tipo_produto','$destaque_produto','$descri_produto','$resumo_produto','$valor_produto','$imagem_produto');
                 ";
        $resultado = $conn->query($insereProd);
        //Após a gravação bem sucedida do produto, volta (Atualiza) para lista.
        
        if(mysqli_insert_id($conn)){
            header('location: produtos_lista.php');
        }
    }

        // Selecionar os dados e chave estrangeira (lista de tipos de produtos)
        
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
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilo.css">

        <title>Produto Insere</title>
    </head>

    <body>
        <?php include "menu_adm.php";?>
        <main class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                    <h2 class="breadcrumb text-danger">
                        <a href="produtos_lista.php">
                            <button class="btn btn-danger">
                                <span class="glyphicon glyphicon-chevron-left">

                                </span>
                            </button>
                        </a>

                        <!-- Inserindo Produtos  -->

                    </h2>
                    <div class="thumbnail">
                        <div class="alert alert-danger" role="alert">
                            
                            <form action="produtos_insere.php" method="post" name="form_produto_insere" enctype="multipart/form-data" id="form_produto_insere">
                                    
                                <label for="id_tipo_produto">Tipo:</label>
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                        </span>
                                        <select name="id_tipo_produto" id="id_tipo_produto" class="form-control" require>
                                            <?php do{ ?>
                                            
                                            <option value="<?php echo $row_fk['id_tipo']?>">
                                                <?php echo $row_fk['rotulo_tipo']?>
                                            </option>
                                            
                                            <?php }while($row_fk=$lista_fk->fetch_assoc()); ?>
                                        </select>
                                    </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </body>
</html>
