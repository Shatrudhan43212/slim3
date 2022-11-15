<?php
 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
 
require('vendor/autoload.php');
session_start();
$settings = require __DIR__ . '/src/settings.php';
 
$app = new \Slim\App($settings);
 
// Get container
$container = $app->getContainer();

// $container['flash'] = function () {
//     return new \Slim\Flash\Messages();
// };
  
// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('templates',['baseUrl' => '/slimnew/']);
};
 
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $c['view']->render($response->withStatus(404), '404.php', [
            "myError" => "Error"
        ]);
    };
};
 
// Register routes
require __DIR__ . '/src/routes.php';
 
 
$app->run();
