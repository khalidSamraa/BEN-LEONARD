<?php 
Global $sections, $index;
?>
<section data-aos="fade-up" id="showcase" style="background:#333 url(<?php echo $sections[$index]['image']; ?>) no-repeat center center/cover ;">
    <div class="showcase-content owl-carousel">
    	<?php 
    		$testimonials=$sections[$index]['testimonials'];
    		if(is_array($testimonials)){
    			for($i=0;$i<count($testimonials);$i++){
    	?>
        <div class="showcase-container">
            <?php echo $testimonials[$i]['content']; ?>
            <p class="lead-name py-2">
                <?php echo $testimonials[$i]['name']; ?>
            </p>
        </div>
    	<?php } ?>
    	<?php } ?>
    </div>
</section>