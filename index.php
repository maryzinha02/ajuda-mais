<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/localizar", "Web:location");
$route->get("/forum","Web:faq");
$route->get("/login","Web:login");
$route->get("/cadastro","Web:register");
$route->get("/ajudas","Web:support");

$route->get("/ops/{errcode}", "Web:error");

$route->group("/app");

//$route->get("/testeTimas","Web:testeTimas");

$route->get("/perfil", "App:profile");
$route->get("/", "App:home");
$route->get("/cadGroups", "App:registerGroups");
$route->group(null);


$route->group("/admin");
$route->get("/", "Adm:home");
$route->get("/modGroups", "Adm:moderateGroups");
$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
