<?php 
Global $sections, $index;
?>
<section id="market" data-aos="fade-up">
    <div class="market-container">
        <?php if($sections[$index]['slider']){ ?>
            <div class="market-img slider-marketing-image owl-carousel ">
                <?php $slider=$sections[$index]['slider_images'];
                for($i=0;$i<count($slider);$i++){ ?>
                <img src="<?php echo $slider[$i]['image'];?>">
                <?php } ?>
            </div>
        <?php }else{ ?>
            <div class="market-img">
                <img src="<?php echo $sections[$index]['image'];?>">
            </div>
        <?php } ?>
        <div class="market-disc">
            <p class="market-text">
                <?php echo $sections[$index]['content'];?>
            </p>
            <a href="<?php echo $sections[$index]['button_url']; ?>" class="btn btn-market"><?php echo $sections[$index]['button_label']; ?></a>
            <?php echo $sections[$index]['bottom_line']; ?>
        </div>
    </div>
</section>