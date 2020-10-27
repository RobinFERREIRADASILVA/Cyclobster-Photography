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

        require_once __DIR__.('/../views/header.tpl.php');
        require_once __DIR__.('/../views/sidebar.tpl.php');
        require_once __DIR__.('/../views/'. $view .'.tpl.php');
        require_once __DIR__.('/../views/footer.tpl.php');

    }
}