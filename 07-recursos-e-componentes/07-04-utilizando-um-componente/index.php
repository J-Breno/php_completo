<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.04 - Utilizando um componente");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ instance ] https://packagist.org/packages/phpmailer/phpmailer
 */
fullStackPHPClassSession("instance", __LINE__);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailException;

$phpMailer = new PHPMailer();
var_dump($phpMailer instanceof PHPMailer);

/*
 * [ configure ]
 */
fullStackPHPClassSession("configure", __LINE__);

try {
     $mail = new PHPMailer(true);

     // CONFIG
    $mail->isSMTP();
    $mail->setLanguage("br");

    $mail->isHTML(true);
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->CharSet = "utf-8";

    // AUTH
    $mail->Host = "smtp.mailersend.net";
    $mail->Username = "MS_7BFTAN@test-51ndgwvnp8rlzqx8.mlsender.net";
    $mail->Password = "mssp.6lpdBsh.pq3enl6rw68l2vwr.AgNMmRB";
    $mail->Port = "587";
    // MAIL

    $mail->setFrom("brenojoao2222@jbrenodev.com.br", "João Breno");
    $mail->Subject = "Esse é meu envio via componente no FSPHP";
    $mail->msgHTML("<h1>Olá, Mundo!<p>Esse é meu primeiro disparo de e-mail.</p></h1>");


    // SEND

    $mail->addAddress("brenojoao2222@gmail.com", "João Melo");
    $send = $mail->send();
    var_dump($send);
} catch (MailException $exception) {
    echo message()->error($exception->getMessage());
}