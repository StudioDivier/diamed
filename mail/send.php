<?php

require_once "SendMailSmtpClass.php";
include 'config.php';

use data as f;
$login = f\D::$log;
$password = f\D::$pas;

$tel = $_POST['tel'];
$email = $_POST['email'];


$from = array(
    $_POST['tel'],
    $_POST['email']
);



$mailSMTP = new SendMailSmtpClass($login, $password,
    'ssl://smtp.yandex.ua', 465, "UTF-8");

$to = 'info@diamedcare.ru';

$url = $_POST['url'];

$sbj = 'REQUEST FORM: ' . $url;

$message = "<h3>Заявка со страницы:" . $url . "</h3><ul><li>Телефон: " . $tel . "</li>  <li>Email: " . $email . "</li> </ul>";

$result = $mailSMTP->send($to, $sbj, $message, $from);


//if($result === true){
//    header('Location: ' . $_POST['link']);
//}else {
//    echo "Error: " . $result;
//
//}
