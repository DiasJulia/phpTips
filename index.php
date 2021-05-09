<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("Source\Controllers");

$router->group(null);
$router->get("/", "ViewController:home", "home");

$router->group("user");
$router->post("/cadastro", "UserController:registerUser", "registerUser");

/**
 * Group Error
 * This monitors all Router errors. Are they: 400 Bad Request, 404 Not Found, 405 Method Not Allowed and 501 Not Implemented
 */

$router->group("error");
$router->get("/{errcode}", "ViewController:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/error/{$router->error()}");
}

/*use Source\Models\User;

echo "<h1> AAA</h1>";

$user = new User();

$user->name = "Júlia";
$user->email = "julia@orditi.com";
$user->password = "123";

var_dump($user);

$user->save();*/