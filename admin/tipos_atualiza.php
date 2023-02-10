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
            header('location: tipo_lista.php');
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


           // Selecionar os dados e chave estrangeira (lista de tipos de tipos)
        
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

        <title>Tipo Atualiza</title>
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
                            
                        <form action="produtos_atualiza.php" method="post" name="form_produto_atualiza" enctype="multipart/form-data" id="form_produto_atualiza">

                        <input type="hidden" name="id_produto" id="id_produto" value="<?php echo $row['id_produto'] ?>">
                                    
                                <label for="id_tipo_produto">Tipo:</label>
                                    
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                        </span>
                                        <select name="id_tipo_produto" id="id_tipo_produto" class="form-control" required>
                                            <?php do{ ?>
                                            
                                            <option value="<?php echo $row_fk['id_tipo']?>">
                                                <?php echo $row_fk['rotulo_tipo']?>
                                            </option>
                                            
                                            <?php }while($row_fk=$lista_fk->fetch_assoc()); ?>
                                        </select>
                                    </div>
                                    <label for="destaque_produto">Destaque:</label>
                                    <div class="input-group">
                                        <label for="destaque_produtos_s" class="radio-inline">
                                                <input type="radio" name="destaque_produto" id="destaque_produto" value="Sim" <?php echo $row['destaque_produto']=="Sim"?"checked":null ?>>Sim
                                        </label>
                                        <label for="destaque_produtos_s" class="radio-inline">
                                                <input type="radio" name="destaque_produto" id="destaque_produto" value="Não" <?php echo $row['destaque_produto']=="Não"?"checked":null ?>>Não
                                        </label>
                                    </div>
                                        
                                    <label for="descri_produto">Descrição:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-cutler" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="descri_produto" id="descri_produto"
                                                class="form-control" placeholder="Digite a descrição do Produto"
                                                maxlength="100" value="<?php echo $row['descri_produto'];?>">
                                        
                                    </div>

                                    <label for="resumo_produto">Resumo:</label>
                                   
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                        </span>
                                        <textarea name="resumo_produto" id="resumo_produto"
                                                cols="30" rows="8" 
                                                class="form-control" placeholder="Digite os detalhes do Produto"
                                                required><?php echo $row['resumo_produto'];?></textarea>
                                    </div>

                                    <label for="valor_produto">Preço do Produto:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                                        </span>
                                        <input type="number" name="valor_produto" id="valor_produto"
                                                class="form-control" placeholder="Digite o preço do Produto"
                                                required required min="0" step="0.01" value="<?php echo $row['valor_produto'];?>">

                                    </div>

                                    <label for="imagem_produto_atual">Imagem Atual</label>    
                                    <img src="../images/" <?php echo $row['imagem_produto'];?> alt="" srcset="">
                                          
                                    
                                    <label for="imagem_produto">Imagem Nova:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                                        </span>
                                    <img src="" alt="" name="imagem" id="imagem" class="img-responsive">
                                    <input type="file" name="imagem_produto" id="imagem_produto" class="form-control" accept="image/*">
                                    </div>
                                    <br>
                                    <hr>
                                    <input type="submit" id="enviar" name="enviar" class="btn btn-danger btn-block" value="Atualizar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>