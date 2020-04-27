<?php 
Global $sections, $index;
?>
<section id="slider" data-aos="fade-up">
    <div class="slider-container py-1">
        <div class="slider-hero py-4">
            <p><?php echo $sections[$index]['title']; ?></p>
        </div>
        <?php $images= $sections[$index]['images']; ?>
        <?php if(is_array($images)){ ?>
        <div class="owl-carousel owl-theme slider-items my-2">
            <?php for($i=0;$i<count($images);$i++){ ?>
                <div class="slider-item">
                    <img src="<?php echo $images[$i]['image'];  ?>">
                </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>

</section>
