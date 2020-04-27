<?php 
Global $sections, $index;
?>
<section id="work" data-aos="fade-up">
    <div class="work-container">
    	<p class="work-heading"><?php echo $sections[$index]['title']; ?></p>
		<p class="work-lead">
		   <?php echo $sections[$index]['explanation_line']; ?>
		</p>
		<p class="work-lead">
		  <?php echo $sections[$index]['follow_up_line']; ?>
		</p>
		<h2 class="work-l-heading">
		  <?php echo $sections[$index]['objective']; ?>
		</h2>
		<a href="<?php echo $sections[$index]['button_url']; ?>" class="btn btn-work"><?php echo $sections[$index]['button_text']; ?></a>
    </div>
</section>