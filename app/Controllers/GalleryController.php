<?php

namespace photo\Controllers;

use photo\Controllers\CoreController;
use photo\Models\Category;
use photo\Models\Photos;

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
        $picture = new Photos;
        $pictureList = $picture->findByCategory($id);

        $this->show('gallery/category',[
            'pictureList' => $pictureList,
        ]);
    }

    public function picture($id)
    {
        $picture = Photos::find($id);

        $this->show('gallery/picture', [
            'picture' => $picture,
        ]);
    }
}