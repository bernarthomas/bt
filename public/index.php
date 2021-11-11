<?php
require __DIR__.'/../vendor/autoload.php';
use App\Route;
(new (Route::ROUTES[$_SERVER['REQUEST_URI']]['controlleur'])())();
