<?php

$routes->group(
    'settings', ['namespace' => 'App\Modules\Settings\Controllers'], function ($routes) {
        $routes->get('/', 'Index::index');
    }
);