<?php

namespace App\Core;

use App\Core\View;

class Controller
{
    public View $view;

    public function __construct()
    {
        $this->view = new View();
    }
}
