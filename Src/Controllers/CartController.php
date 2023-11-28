<?php

namespace Src\Controllers;

use Laminas\Diactoros\ServerRequest;

class CartController
{
    public function addToCart(ServerRequest $request)
    {
        $productId = $request->getQueryParams()['id'];
        if($productId != $_COOKIE['productId']){
            setcookie('productId',$productId);
        }
        $id = explode(" ",$productId);
        var_dump($_COOKIE);
    }
}