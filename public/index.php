<?php

use photo\Controllers\ErrorController;
use photo\Controllers\MainController;

require __DIR__.'/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map( 
    //Le type de requete (GET ou POST)
    'GET',
    // L'URL ou le schema d'url que AltoRouter va surveiller pour activer cette route
    '/',
    // target , càd la "destination de la route"
    [
        'method' => 'home',
        'controller' => 'photo\Controllers\MainController'
    ],
    //Optionnellement on peut nommer cette route
    'home'
);

$router->map(
    'GET',
    '/gallery',
    [
        'method' => 'gallery',
        'controller' => 'photo\Controllers\MainController'

    ],
    'gallery'
);
$router->map(
    'GET',
    '/about',
    [
        'method' => 'about',
        'controller' => 'photo\Controllers\MainController'

    ],
    'about'
);
$router->map(
    'GET',
    '/contact',
    [
        'method' => 'contact',
        'controller' => 'photo\Controllers\MainController'

    ],
    'contact'
);
$router->map(
    'GET',
    '/livre',
    [
        'method' => 'livre',
        'controller' => 'photo\Controllers\MainController'

    ],
    'livre'
);
$router->map(
    'GET',
    '/error404',
    [
        'method' => 'error404',
        'controller' => 'photo\Controllers\ErrorController'

    ],
    'error404'
);
$router->map(
    'GET',
    '/gallery/[i:id]',
    [
        'method' => 'galleryId',
        'controller' => 'photo\Controllers\VariableController'

    ],
    'galleryId'
);

$match = $router->match();

if($match !== false)
{
    $controllerToUse = $match['target']['controller'];
    $methodToCall = $match['target']['method'];
    $controller = new MainController($router);
    $controller->$methodToCall($match['params']);
}
// else
// {
//     $controller = new photo\Controllers\ErrorController($router);
//     $controller->error404();

// }
