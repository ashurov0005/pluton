<?php

// Подключение autoloader PHPMailer
require 'vendor/autoload.php';


// Создание объекта PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Настройка SMTP-сервера
$mail->isSMTP();
$mail->Host       = 'ssl://smtp.mail.ru';
$mail->SMTPAuth   = true;
$mail->Username   = 'mexriyor.ashurov@bk.ru';
$mail->Password   = 'GaRU8ikWwjsnmk75Fezp';
$mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 465;
$mail->CharSet = "utf-8";


// Настройка отправителя и получателя
$mail->setFrom('mexriyor.ashurov@bk.ru', 'akojonat');
$mail->addAddress('mexriyor.ashurov@bk.ru', 'Recipient Name');


// Настройка темы и содержимого письма
$mail->Subject = 'ukojon kaif kun';
$mail->Body    = 'ukojonnnn';

// Отправка письма
if ($mail->send()) {
    
    echo 'Письмо успешно отправлено!';
} else {
    echo 'Возникла ошибка при отправке письма: ' . $mail->ErrorInfo;
}

?>