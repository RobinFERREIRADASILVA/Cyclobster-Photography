<?php

namespace photo\Controllers;

class CoreController
{
    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function show($view, $viewData = [])
    {
        $router = $this->router;

        extract($viewData);

        require_once __DIR__.'/../views/layout/header.tpl.php';
        require_once __DIR__.'/../views/layout/sidebar.tpl.php';
        require_once __DIR__.'/../views/'. $view .'.tpl.php';
        require_once __DIR__.'/../views/layout/footer.tpl.php';

    }
}