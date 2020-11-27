<?php

namespace photo\Controllers;

use photo\Controllers\CoreController;

class MainController extends CoreController
{
    public function home()
    {
        $this->show('main/home');
    }
    public function about()
    {
        $this->show('main/about');
    }
    public function contact(){
        $this->show('main/contact');
    }

}