<?php ?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rodapé</title>
</head>
<body class="fundofixo">
    <div class="row panel-footer fundo-rodape">
        
        <!-- Area de Localização  -->

        <div class="col-sm-6 col-md-4"> <!--  6=Altura 4=Coluna -->
            
            <div class="panel-footer" style="background: none;">
                
                <img  width="80px" src="images/logo.png" alt="logo-pequeno">
                <br>
                <i> <strong>O Melhor Churrasco da Zona Leste</strong> </i> 
                
                <address>
                            
                        <i>Avenida Itaquera, 8266 - Itaquera - São Paulo - SP - CEP: 0829-500</i> 

                        <br>
                        
                        <span class="glyphicon glyphicon-phone-alt"></span>
                        &nbsp;(11) 2185-9200

                        <br>

                        <span class="glyphicon glyphicon-envelope"></span>
                        &nbsp;
                        <a href="mailto:contato@contatochuletaquente.com.br?subject=Contato da Churrascaria&cc=biancalourencosilva@gmail.com">
                            Contato@chuletaquente.com.br
                        </a>

                </address>

                <div class="embed-responsive embed-responsive-4by3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7942870068123!2d-46.45873724919619!3d-23.539900184618393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf22458913%3A0xecdac462b58a9475!2sSenac%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1674235618882!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                </div>

            </div>

        </div>
        
        <!-- Final da Area de Localização  -->

        
        <!-- Inicio do Mapa do Site  -->

        <div class="col-sm-6 col-md-4">
            <div class="panel-footer">
                <h4>Links</h4>
                <ul class="nav nav-pills nav-stacked">

                    <li > 
                        <a href="index.php#home" class="text-danger">
                            <span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Home</span>
                        </a>
                    </li>

                    <li >
                        <a href="index.php#destaques" class="text-danger">
                            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true">&nbsp;Destaques</span>
                        </a>
                    </li>

                    <li >
                        <a href="index.php#produtos" class="text-danger">
                            <span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Produtos</span>
                        </a>
                    </li>

                    <li >
                        <a href="index.php#contato" class="text-danger">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Contatos</span>
                        </a>
                    </li>

                    <li >
                        <a href="admin/index.php" class="text-danger">
                            <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Administração</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

         <!-- Final do Mapa do Site  -->

         <!-- Inicio Area de Contato  -->

        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" background: none;>
                    <h4>Contato</h4>
                    <form action="rodape_contato_envia.php" name="form_contato" id="form_contato" method="post">
                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                    <input type="text" name="nome_contato" placeholder="Digite seu Nome" aria-describedby="basic-addon1" class="form-control" required>
                                
                            </span>
                        </p>

                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="text" name="nome_contato" placeholder="Digite seu E-mail" aria-describedby="basic-addon2" class="form-control" required>
                            </span>
                        </p>

                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon3">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </span>
                                    <textarea type="text" name="nome_contato" cols="30" rows="5" placeholder="Digite seu Comentário" aria-describedby="basic-addon3" class="form-control" required> </textarea></span> 
                            </span>
                        </p>
                        
                        <p>
                            <button class="btn btn-danger btn-block" aria-label="Enviar" role="button">
                               Enviar
                               <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                            </button>
                        </p>

                    </form>
            </div>
           
            <!-- Final Area de Contato  -->
            
        </div>
        <div class="col-sm-12">
            <div class="panel-footer" style="background: none;">
                <h6 class="text-danger text-center">
                    Desenvolvido por JD Construtora&trade; 2023
                    <br>
                    <a href="https://jdconstrutor.netlify.app/" target="_blank">jdconstrutor.netlify.app</a> 
                </h6>
            </div>
        </div>
    </div>
    
</body>
</html>