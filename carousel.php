<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
</head>
<body>
    <div id="banners" class="carousel slide" data-ride="carousel">
        
        <div class="carousel-inner thumbnail" role="listbox">
        <div class="item active">
                <img src="images/desconto.jpg" alt="Churrascaria" class="center-block">
            </div>
            <div class="item">
                <img src="images/churrascaria.jpg" alt="Churrascaria" class="center-block">
            </div>
            <div class="item ">
                <img src="images/Banner1.jpg" alt="Primeiro Banner" class="center-block">
            </div>
            <div class="item ">
                <img src="images/Banner2.jpg" alt="Segundo Banner" class="center-block">
            </div>
        </div>
        <a href="#banners" class="left carousel-control" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#banners" class="right carousel-control" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    
</body>
</html>