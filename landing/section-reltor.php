<?php 
Global $sections, $index;

?>
<section id="realtor">
    <div class="realtor_container">
        <div class="realtor_items">
            <div class="realtor_item">
                <h2 class="l-heading" data-aos="zoom-in-up">
                    <?php echo $sections[$index]['title']; ?>
                </h2>
            </div>
            <div class="realtor_item">
                <div class="item" data-aos="zoom-out-right">
                    <?php echo $sections[$index]['left_paragraph']; ?>
                </div>
                <div class="item" data-aos="zoom-out-left">
                    <?php echo $sections[$index]['right_paragraph']; ?>
                </div>
            </div>

        </div>
    </div>

            <div class="realtor_item_1">
                <div class="item-1">
                    <p><?php echo $sections[$index]['realtor_name']; ?></p>
                    <p><?php echo $sections[$index]['realtor_position']; ?></p>
                </div>
                <div class="item-1">
                    <img src="<?php echo $sections[$index]['realtor_logo']; ?>">
                    <?php echo $sections[$index]['certificates']; ?>
                </div>
            </div>

    <div class="item-1-2">
        <img  src="<?php echo $sections[$index]['image'];?>">
    </div>
</section>