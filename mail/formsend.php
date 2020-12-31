<?php

require_once "SendMailSmtpClass.php";
include 'config.php';

use data as f;
$login = f\D::$log;
$password = f\D::$pas;

$tel = $_POST['tel-modal'];
$name = $_POST['name-modal'];
$url = $_POST['url-modal'];


$from = array(
    $_POST['tel-modal'],
    $_POST['name-modal']
);



$mailSMTP = new SendMailSmtpClass($login, $password,
    'ssl://smtp.yandex.ru', 465, "UTF-8");

$to = 'info@diamedcare.ru';



$sbj = 'REQUEST FORM: ' . $url;

$msg = "Заявка со страницы: " . $url . "\nТелефон: " . $tel . "\nИмя: " . $name;

$result = $mailSMTP->send($to, $sbj, $msg, $from);


$to = 'info@diamedcare.ru';
$subject = $sbj;
$message = $msg;
$headers = 'From: info@diamedcare.ru' . "\r\n" .
    'Reply-To: info@diamedcare.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('Location: ' . 'https://diamedcare.ru/thank/');
