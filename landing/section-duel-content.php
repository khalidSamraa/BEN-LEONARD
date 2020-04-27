<?php 
Global $sections, $index;
?>
<section id="advan" data-aos="fade-up">
    <div class="advan-container">
        <div class="advan-items">
            <div class="advan-item">
                <div class="advan-desc">
                    <?php echo $sections[$index]['left_content']; ?>
                </div>
            </div>
            <div class="advan-item">
                <div class="advan-desc">
                    <?php echo $sections[$index]['right_content']; ?>
                </div>
            </div>
        </div>
    </div>
    <svg id="polygon" height="30" width="60">
        <polygon points="0,0 60,0 30,30" style="fill:#dedfe3;stroke:#dedfe3;stroke-width:1" />
        Sorry, your browser does not support inline SVG.
    </svg>
</section>