<?php

namespace App\Controller;

use App\Core\Controller;

class HomepageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(): void
    {
        $this->view->render("homepage", ["title" => "Pokedex"]);
    }
}
