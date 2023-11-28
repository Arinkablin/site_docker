<?php

namespace Src\Controllers;
use MiladRahimi\PhpRouter\View\View;

class MainController
{
    public function indexPage(View $view)
    {
        return $view->make('index');
    }

    public function loginPage(View $view)
    {
        return $view->make('product-my-acount');
    }
    public function registrationPage(View $view)
    {
        return $view->make('product-my-acount-registration');
    }
}