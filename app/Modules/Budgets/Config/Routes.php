<?php

$routes->group(
    'budgets', ['namespace' => 'App\Modules\Budgets\Controllers'], function ($routes) {
        $routes->get('/', 'Index::index');
    }
);