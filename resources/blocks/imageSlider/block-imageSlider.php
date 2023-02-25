<div class="galery_image swiper">
    <div class="swiper-wrapper">
        <?php
        $galery = get_field('galery_image');
        if($galery){
            foreach ($galery as $images){
                ?>
                <div class="swiper-slide">
                    <img src="<?= $images ?>" class="img-fluid">
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<div class="galery_image_thumb swiper" thumbsSlider="">
    <div class="swiper-wrapper">
        <?php
        $galery = get_field('galery_image');
        if($galery){
            foreach ($galery as $images){
                ?>
                <div class="swiper-slide">
                    <img src="<?= $images ?>" class="img-fluid">
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
