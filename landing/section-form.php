<?php 
Global $sections, $index;
?>
<section id="contact" data-aos="fade-up">
    <div class="contact-container">
        <h1 class="text-secondary py-3" ><?php echo $sections[$index]['title']; ?></h1>
        <?php echo do_shortcode('[gravityform id="'.$sections[$index]['form_id'].'" title="false" description="false"]'); ?>
    </div>

</section>