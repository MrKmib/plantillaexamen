<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Views\HomeView;
//use App\Http\Models\ModelPropietario;

class HomeController{
    private HomeView $homeview;

    public function __construct()
    {
        $this->homeview = new HomeView();
    }

    public function index(): void
    {
        $this->homeview->showIndex();
    }


}
