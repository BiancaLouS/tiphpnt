<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    
    if($_POST){
        
        $id = $_POST['id'];
        $dataAtual = $_POST['dataAtual'];
        $dataFinal = $_POST['dataFinal'];

        $InsereTipo = "INSERT INTO  tbtipos
                     (id_tipo, sigla_tipo, rotulo_tipo)
                        VALUES 
                     ('$id_tipo','$sigla_tipo','$rotulo_tipo');
                 ";
        $resultado = $conn->query($InsereTipo);
        
        if(mysqli_insert_id($conn)){
            header('location: tipos_lista.php');
        }
    }
        
?>