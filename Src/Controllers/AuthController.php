<?php

namespace Src\Controllers;

use Laminas\Diactoros\Response\RedirectResponse;
use Laminas\Diactoros\ServerRequest;
use ORM;

class AuthController
{
    public function login(ServerRequest $request)
    {
        $username = $request->getParsedBody()['username'];
        $password = $request->getParsedBody()['password'];
        $login = ORM::for_table('users')
        ->where('username',$username)
        ->where('password',$password)
        ->find_one();
        if($login){
            $_SESSION['user_id'] = $login['id'];
            return new RedirectResponse('/');
        }
        return new RedirectResponse('/product-my-account');
    }
}