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
      <strong> Seja Bem Vindo! </strong>
    </h2>
    
    <!-- area de carrosel -->
    <?php include 'carousel.php';?>
        
        <!-- area de destaque -->
        <a neme="destaques">&nbsp;</a>
        <?php include 'produtos_destaque.php';?>
       
       
        <!-- area geral de produtos -->
        <a name="produtos">&nbsp;</a>
        <?php include 'produtos_geral.php';?>
       
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