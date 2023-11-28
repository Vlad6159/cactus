<?php


use MiladRahimi\PhpRouter\Router;
use Src\Controllers\AuthController;
use Src\Controllers\CartController;
use Src\Controllers\CheckOutController;
use Src\Controllers\MainController;

require 'vendor/autoload.php';

ORM::configure('mysql:host=database;dbname=docker');
ORM::configure('username', 'docker');
ORM::configure('password', 'docker');

$router = Router::create();

$router->setupView('views');

$router->get('/clear', function (){
    session_unset();
});

$router->get('/',[MainController::class,'indexPage']);

$router->get('/profile',[MainController::class,'profilePage']);
$router->post('/profile',[AuthController::class,'login']);

$router->get('/check-out',[MainController::class,'checkoutPage']);
$router->post('/check-out',[CheckOutController::class,'checkout']);

$router->get('/products',[MainController::class,'productsListPage']);
$router->get('/add-to-cart',[CartController::class,'addToCart']);

$router->dispatch();