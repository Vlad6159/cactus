<?php

namespace Src\Controllers;

use Laminas\Diactoros\ServerRequest;
use ORM;

class CartController
{
    public function addToCart(ServerRequest $request)
    {
        $products = ORM::for_table('products')->find_many();
        $productId = $request->getQueryParams()['id'];

//        if($_COOKIE['productId']){
//            echo '1';
//            for ($i = 0; $i < count($products); $i++) {
//                if (!$_COOKIE['productId'][$i]) {
//                    setcookie("productId[$i]",$productId);
//                    break;
//                }
//                echo $i;
//            }
//        }
//        echo '2';

        $products = $_COOKIE['products'] ?? null;

        if ($products)

        setcookie('products', $productId);
        var_dump($_COOKIE);
    }
}