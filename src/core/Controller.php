<?php

namespace App\core;

abstract class Controller
{
    public function render($view, $data = [])
    {
        extract($data);

        include "views/$view.php";
    }
}