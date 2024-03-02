<?php

namespace App\Site\controller;

use App\core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('home');
    }
}