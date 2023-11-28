<?php

namespace Src\Controllers;

use Laminas\Diactoros\ServerRequest;

class CartController
{
    public function addToCart(ServerRequest $request)
    {
        $productId = $request->getQueryParams()['id'];

    }
}