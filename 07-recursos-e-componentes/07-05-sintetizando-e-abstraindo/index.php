<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.05 - Sintetizando e abstraindo");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ synthesize ]
 */
fullStackPHPClassSession("synthesize", __LINE__);

$email = (new \Source\Core\Email())->bootsrap(
    "Ol-a mundo, esse é meu e-mail!",
    "<h1>Olá, Mundo!<p>Esse é meu primeiro disparo de e-mail.</p></h1>",
    "joao.breno85@hotmail.com",
    "João Melo"
);

$email->attach(__DIR__."/../../../upinside/fsphp/images/cover.jpg", "FSPHP");
$email->attach(__DIR__."/../../../upinside/fsphp/laradev/images/cover.jpg", "Laradev");

if($email->send()) {
    echo message()->success("E-mail enviado com sucesso!");
} else {
    echo $email->message();
}