<?php

use MiladRahimi\PhpRouter\Router;
use MiladRahimi\PhpRouter\View\View;
use Src\Controllers\MainController;
use Src\Controllers\AuthController;


require_once 'vendor/autoload.php';


ORM::configure('mysql:host=database;dbname=docker');
ORM::configure('username', 'docker');
ORM::configure('password', 'docker');

$router = Router::create();

$router->setupView('view');

$router->get('/', [MainController::class, 'indexPage']);
$router->get('/product-my-acount', [MainController::class, 'loginPage']);
$router->post('/product-my-acount', [AuthController::class, 'loginPage']);

$router->get('/product-my-acount-registration', [MainController::class, 'registrationPage']);
$router->post('/product-my-acount-registration', [AuthController::class, 'registrationPage']);



$router->dispatch();