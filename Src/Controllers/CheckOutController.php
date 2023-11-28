<?php

namespace Src\Controllers;

use Laminas\Diactoros\Response\RedirectResponse;
use Laminas\Diactoros\ServerRequest;
use MiladRahimi\PhpRouter\Routing\Repository;
use ORM;

class CheckOutController
{
    public function checkout(ServerRequest $request)
    {
        $firstName = $request->getParsedBody()['first_name'];
        $lastName = $request->getParsedBody()['last_name'];
        $company = $request->getParsedBody()['company'] || null;
        $email = $request->getParsedBody()['email'];
        $phone = $request->getParsedBody()['phone'];
        $country = $request->getParsedBody()['country'];
        $address = $request->getParsedBody()['address'];
        $city = $request->getParsedBody()['city'];
        $state = $request->getParsedBody()['state'] || null;
        $postcode = $request->getParsedBody()['postcode'] || null;
        $username = $request->getParsedBody()['username'] || null;
        $password = $request->getParsedBody()['password'] || null;

        $user = ORM::for_table('users')->create();
        $user -> first_name = $firstName;
        $user -> last_name = $lastName;
        $user -> company = $company;
        $user -> email = $email;
        $user -> phone = $phone;
        $user -> country = $country;
        $user -> address = $address;
        $user -> city = $city;
        $user -> state = $state;
        $user -> postcode = $postcode;
        $user -> username = $username;
        $user -> password = $password;
        $user -> is_admin = 0;
        $user->save();

//        return new RedirectResponse('/');
    }
}