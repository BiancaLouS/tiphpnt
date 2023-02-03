<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';

    if($_POST){
        if(isset($_POST['enviar'])){
            $nome_img = $_FILES['imagem_produto']['name'];
            $tmp_img = $_FILES['imagem_produto']['tmp_name'];
            $dir_img = "../images/".$nome_img;
            move_uploaded_file($tmp_img, $dir_img);
        }
    }
?>