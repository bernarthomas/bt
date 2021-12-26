<?php

namespace App;

class Route
{
    const ROUTES = [
        '/page1' => ['controlleur' => 'App\controlleur\Page1'],
        '/index.php' => ['controlleur' => 'App\controlleur\Accueil'],
        '/' => ['controlleur' => 'App\controlleur\Accueil'],
    ];
}