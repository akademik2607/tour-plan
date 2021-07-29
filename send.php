<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name; 
$phone; 
$message; 
$email;
$title; 
$body;
if($_POST['name'] && $_POST['phone']){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Формирование самого письма
    $title = "Писмо с сайта Tour Plan";
    $body = "
    <h2>Новое письмо</h2>
    <b>Имя:</b> $name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Сообщение:</b><br>$message
    ";
}else if($_POST['email']){
    $email = $_POST['email'];

    // Формирование самого письма
    $title = "Писмо с сайта Tour Plan";
    $body = "
    <h2>Новое письмо</h2>
    <b>Почтовый адрес:</b><br>$email
    ";
}

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'akademik2607@mail.ru'; // Логин на почте
    $mail->Password   = '!Hesaga0808!'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('akademik2607@mail.ru', 'Алексей Илларионов'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('akademik2607@mail.ru');  
    //$mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: thankyou.php');
?>
