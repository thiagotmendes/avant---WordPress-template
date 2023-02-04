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

<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.8/holder.min.js" integrity="sha512-O6R6IBONpEcZVYJAmSC+20vdsM07uFuGjFf0n/Zthm8sOFW+lAq/OK1WOL8vk93GBDxtMIy6ocbj6lduyeLuqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
