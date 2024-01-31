<?php

declare(strict_types=1);

namespace App\Http\Views;

class HomeView{
    public function showIndex(): void
    {
        $title = 'Home view';
        $content = '../templates/views/layout.html';
        include '../templates/views/layout.html';
    }
}