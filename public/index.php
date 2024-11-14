<?php

// Front controller for Laravel

// Check if the application is in maintenance mode
if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

// Register the Composer autoloader
require __DIR__.'/../vendor/autoload.php';


// Bootstrap the Laravel application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Handle the incoming request
$request = Illuminate\Http\Request::capture();
$response = $app->handle($request);

// Send the response to the browser
$response->send();

// Terminate the application (optional)
$app->terminate($request, $response);
