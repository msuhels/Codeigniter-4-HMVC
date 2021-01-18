<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('welcome', ['namespace' => 'App\Modules\Welcome\Controllers'], function ($routes) {
    $routes->add('/', 'Welcome::index');
});