<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once __DIR__."/../vendor/autoload.php";

$m = new PHPMailer();
$m->SMTPDebug = SMTP::DEBUG_SERVER;
$m->isSMTP();
$m->Host = "sandbox.smtp.mailtrap.io";
$m->SMTPAuth = true;
$m->Username = "aed75fa7793261";
$m->Password = "33f987b6c5011e";
$m->Port = 2525;


//configuração da mensagem
$m->CharSet = PHPMailer::CHARSET_UTF8;
$m->setFrom("fgerveson@gmail.com", "Jeff");
$m->addAddress("deia@gmail.com");
$m->isHTML(true);
$m->Subject = "Inscreva-se no canal";
$m->Body = <<<HTML
    <h1>É o canal</h1>
    <p>Ta perdendo</p>
    <a href="https://jeff">Inscreva-se</a>
HTML;

if($m->send()){
    echo "Mensagem foi enviada";
}else{
    echo $m->ErrorInfo;
}