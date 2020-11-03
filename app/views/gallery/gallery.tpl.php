
<div class="gallery-bg">
    
        <div class="category-top">
            <?php for ($index=0; $index<2; $index++): ?>
            <div class="category background-option" style ="background: url('<?= $_SERVER['BASE_URI'] ?>/assets/img/<?= $categoryList[$index]->getPicture() ?>');">
                <div class="wrap">
                    <h2 class="category-title"><?= $categoryList[$index]->getName();  ?></h2>
                    <a href="<?= $router->generate('category',['id' =>  $categoryList[$index]->getId()]) ?>" class="btn">View category</a>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <div class="category background-option middle-margin" style ="background: url('<?= $_SERVER['BASE_URI'] ?>/assets/img/<?= $categoryList[2]->getPicture() ?>');">
            <div class="wrap">
                <h2 class="category-title"><?= $categoryList[2]->getName(); ?></h2>
                <a href="<?= $router->generate('category',['id' =>  $categoryList[2]->getId()]) ?>" class="btn">View category</a>
            </div>
        </div>  

        <div class="category-bottom">
        <?php for ($index=3; $index<5; $index++): ?>
            <div class="category background-option" style ="background: url('<?= $_SERVER['BASE_URI'] ?>/assets/img/<?= $categoryList[$index]->getPicture() ?>');">
                <div class="wrap">
                    <h2 class="category-title"><?= $categoryList[$index]->getName();  ?></h2>
                    <a href="<?= $router->generate('category',['id' =>  $categoryList[$index]->getId()]) ?>" class="btn">View category</a>
                </div>
            </div>
        <?php endfor; ?>
            
        </div>

</div>

        

