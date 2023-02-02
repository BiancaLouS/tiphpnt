<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';
    $lista = $conn->query("select * from vw_tbprodutos order by desc");
    $row = $lista->fetch_assoc();
    $rows = $lista->num_rows;
?>

<!-- todo arquivo da area administrativa deve conter o acesso_com para evitar invasões -->