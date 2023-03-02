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

            <button type="button" class="btn btn-danger active" style="margin-left: 480px; margin-top: 10px; margin-bottom: 0px;" data-toggle="modal" data-target="#myModal">Faça sua Reserva! </button>

              <!-- The Modal -->
              <div class="modal" id="myModal">
                  <div class="modal-dialog">
                      <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                              <h4 class="modal-title">Regras da Promoção</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                              A solicitação da reserva deve ocorrer com 48 horas de antecedência; <br>
                              A promoção é válida somente em 90 dias.
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-danger">Enviar Pedido de Reserva</button>
                          </div>

                      </div>
                  </div>
              </div>   


                    
      

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

    

</body>
</html>