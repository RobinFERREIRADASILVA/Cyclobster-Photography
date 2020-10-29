<?php

namespace photo\Controllers;

use photo\Controllers\CoreController;

class MainController extends CoreController
{
    public function home()
    {
        $this->show('main/home');
    }
    public function gallery()
    {
        $this->show('main/gallery');
    }
    public function about()
    {
        $this->show('about');
    }
    public function contact(){
        $this->show('contact');
    }
    public function livre(){
        $this->show('livre');
    }
}