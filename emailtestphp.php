<?php
require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

// Teste direto - sem passar pelo Auth
$email = new Email();
$email->bootstrap(
    "Teste Direto - Confirmação de Conta",
    "<h1>Teste de E-mail</h1><p>Este é um teste direto do PHPMailer</p>",
    "joao.breno85@hotmail.com", // Use o e-mail que funciona
    "João Breno"
);

if ($email->send()) {
    echo "✅ E-mail enviado com sucesso!";
    // Verifique também a caixa de spam
} else {
    echo "❌ Erro: " . $email->message()->render();
}