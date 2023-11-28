<?php

namespace Src\Controllers;

use MiladRahimi\PhpRouter\View\View;
use ORM;

class MainController
{
    public function indexPage(View $view)
    {
        return $view->make('index');
    }
    public function checkoutPage(View $view)
    {
        return $view->make('product-check-out');
    }
    public function profilePage(View $view)
    {
        return $view->make('product-my-account');
    }
    public function listPage(View $view)
    {
        $products = ORM::for_table('products')->find_many();
        return $view->make('products-list',['products' => $products]);
    }

}