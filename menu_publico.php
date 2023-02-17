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

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Menu Público</title>
</head>
<body class="fundofixo">

    <!-- abre a barra de navegação -->

    <nav class="fixed navbar navbar-fixed-top navbar-light navbar-inverse bg-light">
        <div class="container-fluid">

            <!-- agrupamento mobile  -->
            

            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menupublico" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                
                </button>
                <a href="index.php" class="navbar-bra">
                    <img width="80px" src="images/logo.png" alt="logo">
                </a>
            </div>
            
            

            <!-- fecha agrupamento mobile  -->
            
            <!-- nav direita  -->

            <div class="collapse navbar-collapse" id="menupublico">

                        <a href="pedir_reserva.php">
                            <button type="button" class="btn btn-danger active" style="margin-left: 480px; margin-top: 10px; margin-bottom: 0px;">Faça sua Reserva! </button>
                        </a>

                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="active">
                        <a href="index.php">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                    </li>
                    <li> <a href="index.php#destaques">Destaques</a> </li>

                    <li> <a href="index.php#produtos">Produtos</a> </li>

                    <!-- dropdown  -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            
                            Tipos
                            <span class="caret"></span>

                        </a>

                        <ul class="dropdown-menu">
                            <?php foreach($rows_tipos as $row){?>
                                <li> <a href="produtos_por_tipo.php?id_tipo=<?php echo $row[0] ?> " > <?php echo $row[2]?></a> </li>
                            <?php }?>
                        </ul>

                    </li>
                        
                        <!-- Frim Drop Down  -->

                    <li> <a href="index.php#contato">Contato</a></li>

                        <!-- Início Formulário de Busca  -->

                        <form action="produtos_busca.php" method="get" name="form-busca" id="form-busca" class="navbar-form navbar-left" role="search">

                                <div class="input-group">
                                    <input type="search" name="buscar" id="buscar" size="9" class="form-control"
                                    aria-label="search" placeholder="Buscar Produto" required>

                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </div>

                                </div>

                        </form>
                        
                        <!-- Fim do Formulário de Busca  -->

                    <li class="active">
                        <a href="admin/index.php">
                            <span class="glyphicon glyphicon-user">&nbsp;Admin|Cliente</span>
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    
    <div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    Regras da Reserva:
                    <h4><span class="nome text-danger"></span></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-danger delete-yes">
                        Confirmar
                    </a>
                    <button class="btn btn-success" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome = $(this).data('nome'); 
        var id = $(this).data('id');         
        $('span.nome').text(nome); 
        $('a.delete-yes').attr('href','pedir_reserva.php?id='+id); 
        $('#modalEdit').modal('show'); 
    });
</script>

</body>
</html>