<div class="category-container">
    <?php foreach($pictureList as $picture):  ?>
    <div class="img category" style ="background: url(<?= $_SERVER['BASE_URI']  ?>/assets/img/<?= $picture->getPicture() ?>);">
        <div class="effect"> 
            <a href="<?= $router->generate('picture', ['id' =>$picture->getId()]) ?>" class="btn">View photos</a>
        </div>
    </div>
<?php endforeach; ?>
</div>

