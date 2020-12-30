<?php
//
//require_once "SendMailSmtpClass.php";
//include 'config.php';
//
//use data as f;
//$login = f\D::$log;
//$password = f\D::$pas;
//
$tel = $_POST['tel'];
$email = $_POST['email'];
//
//
//$from = array(
//    $_POST['tel'],
//    $_POST['email']
//);
//
//
//
//$mailSMTP = new SendMailSmtpClass($login, $password,
//    'ssl://smtp.yandex.ru', 465, "UTF-8");
//
//$to = 'info@diamedcare.ru';
//
//$url = $_POST['url'];
//
//$sbj = 'REQUEST FORM: ' . $url;
//
//$msg = "<h3>Заявка со страницы:" . $url . "</h3><ul><li>Телефон: " . $tel . "</li>  <li>Email: " . $email . "</li> </ul>";
//
//$result = $mailSMTP->send($to, $sbj, $message, $from);

// standart
//$to = 'info@diamedcare.ru';
//$subject = $sbj;
//$message = $msg;
//$headers = 'From: info@diamedcare.ru' . "\r\n" .
//    'Reply-To: info@diamedcare.ru' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//mail($to, $subject, $message, $headers);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//
//require 'wp-includes/PHPMailer/Exception.php';
//require 'wp-includes/PHPMailer/PHPMailer.php';
//require 'wp-includes/PHPMailer/SMTP.php';

global $phpmailer;


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.yandex.ru';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@diamedcare.ru';                     // SMTP username
    $mail->Password   = '698148731356';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, 'Mailer');
    $mail->addAddress('info@diamedcare.ru', 'Diamed');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@diamedcare.ru', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "<ul><li>Телефон: " . $tel . "</li>  <li>Email: " . $email . "</li> </ul>";
    $mail->AltBody = 'Заявка с сайта';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}