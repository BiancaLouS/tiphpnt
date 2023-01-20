<?php 
    include "conn/connect.php";
    $idTipo = $_GET['id_tipo'];
    $listaPorTipo = $conn->query("select * from vw_tbprodutos where id_tipo_produto = $idTipo;");
    $rowPorTipo = $listaPorTipo->fetch_assoc();
    $numRows = $listaPorTipo->$num_rows;
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
   
    <title>Busca por Tipo</title>
</head>
    <body class="fundofixo">
        <?php include "menu_publico.php"?>
        <div class="container">

        <!-- Mostrar se a Consulta retornar vazia  -->

        <?php if($numRows == 0){?>
            <h2 class="breadcrumb alert-danger">  
                <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                    <span class="glyphicon glyphicon-chevron-left">

                    </span>
                </a>    
                Não há produtos deste tipo cadastrados.
            </h2>
        <?php }?>
        
        <!-- Mostrar se a Consulta retornou produtos -->

            <?php if($numRows>0){?>
                <h2 class="breadcrumb alert-danger">  
                    <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left">

                        </span>
                    </a>    
                    <strong> <?php echo $rowPorTipo['rotulo_tipo'];?> </strong>
                 </h2>
                 <div class="row">
                    <?php do{ ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <a href="produto_detalhes.php?id_produto=<?php echo $rowPorTipo['id_produto'] ?>">
                                    <img src="images/<?php echo $rowPorTipo['imagem_produto'] ?>" class="img-responsive img-rounded">
                                </a>   
                            </div>
                        </div>
                    <?php }while($rowPorTipo = $listaPorTipo->fetch_assoc()); ?>
                 </div>
            <?php }?>

        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min-js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).on('ready', function(){})
        $(".regular").slick({
                dots:true,
                Infinity: true,
                slidesToShow: 3,
                slidesToScroll: 3

        });
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick/slick.min.js"></script>

</html>