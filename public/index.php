<?php
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
        'controller' => 'photo\Controllers\GalleryController'

    ],
    'gallery'
);
$router->map(
    'GET',
    '/category/[i:id]',
    [
        'method' => 'category',
        'controller' => 'photo\Controllers\GalleryController'

    ],
    'category'
);
$router->map(
    'GET',
    '/picture/[i:id]',
    [
        'method' => 'picture',
        'controller' => 'photo\Controllers\GalleryController'

    ],
    'picture'
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
    '/error404',
    [
        'method' => 'error404',
        'controller' => 'photo\Controllers\ErrorController'

    ],
    'error404'
);


$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');

$dispatcher->setControllersArguments(
    [
        $router,
    ]
    );
// Une fois le "dispatcher" configuré, on lance le dispatch qui va exécuter la méthode du controller
$dispatcher->dispatch();
// else
// {
//     $controller = new photo\Controllers\ErrorController($router);
//     $controller->error404();

// }
