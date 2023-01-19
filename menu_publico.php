<?php 
include "conn/connect.php";
$lista_tipos = $conn->query('select * from tbtipos order by rotulo_tipo;');
$rows_tipos = $lista_tipos->fetch_all();
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Menu Público</title>
</head>
<body>

    <!-- abre a barra de navegação -->

    <nav class="fixed navbar fixed-top navbar-light navbar-inverse bg-light">
        <div class="container-fluid">

            <!-- agrupamento mobile  -->

            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menupublico" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                
                </button>
                <a href="index.php" class="navbar-bra"></a>
                    <img src="images/logo.png" alt="logo ">
            </div>
            
            <!-- fecha agrupamento mobile  -->
            
            <!-- nav direita  -->
            

        </div>
    </nav>
    
</body>
</html>