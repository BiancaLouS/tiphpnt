<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                          
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'biancalourencosilva@gmail.com';                     
        $mail->Password   = 'mfsyipcjnvmqgngt';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 587;                 
        
        $mail->setFrom('biancalourencosilva@gmail.com', 'Mailer');
        $mail->addAddress('biancalourencosilva@gmail.com', 'Bianca');     
        $mail->addReplyTo('biancalourencosilva@gmail.com', 'Information');
        $mail->isHTML(true);
                                          
        $mail->Subject = 'Mensagem Subject Bianca';
        $body = "This is the HTML message body <b>in bold!</b>
            nome: $_POST['nome_contato']<br>
            E-mail: $_POST['email_contato']<br>
            Mensagem:<br> 
            $_POST['msg_contato']<br>";

        $mail->Body = $body;

        $mail->send();
        echo 'E-mail Enviado!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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