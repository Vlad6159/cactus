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

$router->get('/products-check-out',[MainController::class,'checkoutPage']);
$router->post('/products-check-out',[CheckOutController::class,'checkout']);

$router->get('/products-list',[MainController::class,'productsListPage']);
$router->get('/add-to-cart',[CartController::class,'addToCart']);

$router->get('/product-cart',[MainController::class,'cartPage']);

$router->dispatch();