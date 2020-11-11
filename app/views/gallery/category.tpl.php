<div class="category-container">
    <?php foreach($pictureList as $picture):  ?>
    <div class="img category" style ="background: url(<?= $_SERVER['BASE_URI']  ?>/assets/img/<?= $picture->getPicture() ?>);">
        <div class="effect"> 
            <a href="#" class="btn">View photos</a>
        </div>
    </div>
    <div class="modal">
        <span class="close">
            &times; 
        </span>
        <span class="arrow-right">
        <i class="fas fa-arrow-right"></i>
       </span>
       <span class="arrow-left">
       <i class="fas fa-arrow-left"></i>
       </span>
        <img src="<?= $_SERVER['BASE_URI']  ?>/assets/img/<?= $picture->getPicture() ?>" alt="Pictures of photograph Cyclobster" class="img-content">
    </div>
<?php endforeach; ?>
</div>

