<?php

$routes = require base_path('routes.php');

function abort($status_code = 404) {
    http_response_code($status_code);
    require base_path("views/{$status_code}.php");
    die();
};

function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    };
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'] ;
routeToController($uri, $routes);