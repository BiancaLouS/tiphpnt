<?php

    $nome = $_POST['nome_contato'];
    $email = $_POST['email_contato'];
    $comentario = $_POST['msg_contato'];

    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();

    // Configurações do servidor de email
    $mail->Host = 'smtp.office365.com';
    $mail->Port = '587';
    $mail->SMTPSecure = 'STARTTLS';
    $mail->SMTPAuth = 'true';
    $mail->Username = 'SuporteChuletaquente@outlook.com';
    $mail->Password = 'chuletaQu3nt3@Churr4sc0';

    // Configuração de mensagem
    $mail->setFrom($mail->Username, "Seu Nome"); // remetente(sistema)
    $mail->addAddress($mail->Username);                

    $mail->Subject = "Seu comentário foi encaminhado para superiores. Muito Obrigado.";

    $conteudo_email = "
    Voce recebeu uma mensagem de $nome ($email):
    <br>
    Mensagem: <br>
    $comentario
    ";
    $mail->IsHTML(true);
    $mail->Body = $conteudo_email;

    if ($mail->send())
    {
        echo "E-mail enviado com sucesso!";
    }
    else
    {
        echo "Falha ao enviar o e-mail " . $mail->ErrorInfo;
    }
?>
    


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar E-mail</title>
</head>
<body>
    
</body>
</html>