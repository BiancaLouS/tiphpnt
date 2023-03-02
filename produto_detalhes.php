<?php 
include 'conn/connect.php';
$busca_detalhe = $_GET['id_produto'];
$produto_detalhe = $conn->query("select * from vw_tbprodutos where id_produto = '$busca_detalhe';");
$row_detalhe = $produto_detalhe->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Detalhes</title>
</head>
<body class="fundofixo">
    <!-- area de menu -->
    <?php include 'menu_publico.php'?>

    <div class="container">
        <!-- Top para voltar -->
        <h2 class="breadcrumb alert-danger center">
                <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>   
            </a>                
            Detalhes Sobre <?php echo $row_detalhe['descri_produto'] ?>
        </h2>
        <!-- Detalhe produtos -->
        <div class="card mb-3 breadcrumb">
            <div class="row g-0">
                <!-- imagem do produto -->
                <div class="col-md-7">
                    <img src="images/<?php echo $row_detalhe['imagem_produto'] ?>" class="img-fluid img-thumbnail rounded-start" alt="imagem da churrascaria chuleta quente">
                </div>
                <!-- descrição do produto -->
                <div class="col-md-5">
                    <div class="card-body">
                        <h3 class="text-danger text-center text-uppercase"> 
                            <strong><?php echo $row_detalhe['descri_produto'] ?></strong>
                        </h3>

                        <p>
                            <strong><?php echo $row_detalhe['rotulo_tipo'];?></strong>
                        </p>

                        <p>
                            <?php echo $row_detalhe['resumo_produto'];?>
                        </p>

                            <button class="btn btn-default disabled" role="button" style="cursor: default;">
                                <?php echo "R$ ".number_format($row_detalhe['valor_produto'], 2, ',', '.');?>    
                            </button>
                            
                         <a href="pedir_reserva.php">   
                            <button type="button" class="btn btn-danger ">Reserve sua Mesa!</button>
                        </a>

                        </div>

                        <!-- modal pagamentos -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- rodapé -->
        <footer class="panel-footer" style="background: none;">
            <?php include 'rodape.php'; ?>
            <a name="contato"></a>
        </footer>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).on('ready', function(){
        $(".regular").slick({
            dots: true,
            Infinity: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick/slick.min.js"></script>
</html>
