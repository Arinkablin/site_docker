<?php

namespace Src\Controllers;

use Laminas\Diactoros\ServerRequest;
use ORM;

class AuthController
{
    public function login(ServerRequest $request)
    {
        $body = $request->getParsedBody();

        $user = ORM::for_table('users')->where('login', $body['login'])->findOne();
        if ($user && $user['password'] === md5($body['password'])  ){
            $_SESSION['user_id'] = $user['id'];
            if ($user['is_admin']==1){
                return new RedirectResponse('/profile-admin');
            } else
                return new RedirectResponse('/profile');
        }
        return new EmptyResponse();
    }
}