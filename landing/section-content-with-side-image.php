<?php 
Global $sections, $index;
?>
<section id="truth" data-aos="fade-up">
    <div class="truth-desc px-4 py-2">
        <h1 class="text-primary"><?php echo $sections[$index]['title']; ?></h1>
        <?php echo $sections[$index]['content']; ?>
        <a href="<?php echo $sections[$index]['button_url']; ?>" class="btn btn-third"><?php echo $sections[$index]['button_label']; ?></a>
    </div>
    <div class="truth-img">

        <img src="<?php echo $sections[$index]['image']; ?>">
    </div>
</section>