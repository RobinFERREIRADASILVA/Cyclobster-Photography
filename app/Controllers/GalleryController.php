<?php

namespace photo\Controllers;

use photo\Controllers\CoreController;
use photo\Models\Category;

class GalleryController extends CoreController
{

    public function gallery()
    {
        $categoryList = Category::findAll();

        $this->show('gallery/gallery', [
            'categoryList' => $categoryList,
        ]);
    }
    public function category($id)
    {

        $this->show('gallery/category');
    }
}