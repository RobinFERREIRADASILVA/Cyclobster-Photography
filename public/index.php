<?php

require __DIR__ . '/../vendor/autoload.php';


$router = new Altorouter();
//Récupère le chemin de notre site
$router->setBasePath($_SERVER['BASE_URI']);

// $router->map(
//     'GET',
//     '/',
//     [
//         'method' => 'home',
//         'controller' => 'CP\Controllers\MainController'

//     ],
//     'home'
// );
$router->map( 
    //Le type de requete (GET ou POST)
    'GET',
    // L'URL ou le schema d'url que AltoRouter va surveiller pour activer cette route
    '/',
    // target , càd la "destination de la route"
    [
        'method' => 'home',
        'controller' => 'CP\Controllers\MainController'
    ],
    //Optionnellement on peut nommer cette route
    'home'
);

$router->map(
    'GET',
    '/gallery',
    [
        'method' => 'gallery',
        'controller' => 'CP\Controllers\MainController'

    ],
    'gallery'
);
$router->map(
    'GET',
    '/about',
    [
        'method' => 'about',
        'controller' => 'CP\Controllers\MainController'

    ],
    'about'
);
$router->map(
    'GET',
    '/contact',
    [
        'method' => 'contact',
        'controller' => 'CP\Controllers\MainController'

    ],
    'contact'
);
$router->map(
    'GET',
    '/livre',
    [
        'method' => 'livre',
        'controller' => 'CP\Controllers\MainController'

    ],
    'livre'
);
$router->map(
    'GET',
    '/error404',
    [
        'method' => 'error404',
        'controller' => 'CP\Controllers\ErrorController'

    ],
    'error404'
);
$router->map(
    'GET',
    '/gallery/[i:id]',
    [
        'method' => 'galleryId',
        'controller' => 'CP\Controllers\VariableController'

    ],
    'galleryId'
);

dump($router);
dump($router->match());
$match = $router->match();

dump($match);

if($match !== false)
{
    $controllerToUse = $match['target']['controller'];
    $methodToCall = $match['target']['method'];
    $controller = new $controllerToUse($router);
    $controller->$methodToCall($match['params']);
}
// else{
//     // $error = new ErrorController();
//     // $error->show('error404');
// }