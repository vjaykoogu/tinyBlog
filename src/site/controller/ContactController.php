<?php

namespace App\Site\controller;

use App\core\Controller;

class ContactController extends Controller
{
    public function index()
    {   
        $this->render('contact');
    }
}