<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'your_smtp_host';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your_smtp_username';
    $mail->Password   = 'your_smtp_password';
    $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl' depending on your server
    $mail->Port       = 'your_smtp_port';

    //Catch email variables
    
    //Send email config
    $mail->setFrom('your_email@example.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->Subject = 'Your Subject';
    $mail->Body    = 'Email body content here.';

    //Responses and catch block
    try {
        $mail->send();
        echo 'Email has been sent successfully';
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
?>