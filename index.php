<?php 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Chuleta Quente Churrascaria</title>
</head>
<body class="fundofixo">
    <!-- area de menu -->
    <?php include 'menu_publico.php'; ?>
    <a name="home">&nbsp;</a>
    <main class="container">
        
    <h2 class="breadcrumb alert-danger center"> 
        Seja Bem Vindo!
    </h2>

    <div class="thumbnail">
            <img src="images/marca/churrascaria.jpg" class="img-responsive img-rounded"> 
    </div>

    <!-- Carousel Início -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/marca/Banner1.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/marca/Banner2.jpg" alt="Segundo Slide">
            </div>
           
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <!-- Carousel Fim -->
    
    <!-- rodapé -->

    <footer class="panel-footer" style="background: none;">
        <?php include 'rodape.php';?>
    </footer>
    
    </main>
</body>

<!-- links para bootstrap -->

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

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</html>