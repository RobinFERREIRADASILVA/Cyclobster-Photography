<?php

namespace photo\Controllers;

use photo\Controllers\CoreController;

class GalleryController extends CoreController
{

    public function gallery()
    {
        $this->show('gallery/gallery');
    }
    public function category($id)
    {
        $this->show('gallery/category');
    }
}