<?php
ob_start();
require __DIR__ . '/vendor/autoload.php';
/**
 * BOOTSTRAP
 * */

use Source\Core\Session;
use CoffeeCode\Router\Router;

$session = new Session();
$route = new Router(url(), ":");

$route->namespace("Source\App");
$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");

// Blog
$route->get("/blog", "Web:blog");
$route->get("/blog/page/{page}", "Web:blog");
$route->get("/blog/{postName}", "Web:blogPost");

// auth
$route->get("/entrar", "Web:login");
$route->get("/recuperar", "Web:forget");
$route->get("/cadastrar", "Web:register");

//optin
$route->get("/confirma", "Web:confirm");
$route->get("/obrigado", "Web:success");


// services
$route->get("/termos", "Web:terms");

$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

if($route->error()){
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();