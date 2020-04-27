<?php 
Global $sections, $index;
?>

<section id="hero">
    <div class="container">
        <div class="hero_container">
            <div class="hero_item ">
                <?php if($sections[$index]['video_or_image']=='Video'){ ?>
                <div class="wrapper embed">
                    <video  class="video">
                        <source src="<?php echo $sections[$index]['video']; ?>"
                                type="video/mp4"/>
                    </video>
                    <div class="overlay" id="overlay"></div>
                    <div class="playpause"></div>
                </div>
                <?php }else if($sections[$index]['video_or_image']=='Image'){ ?>
                    <img src="<?php echo $sections[$index]['image']; ?>">
                <?php } ?>
            </div>
            <div class="hero_item hero_desc ">
                <div class="hero_desc_cont">
                    <h1 class=""><?php echo $sections[$index]['hero_title']; ?></h1>
                    <p class="hero_paragraph">
                        <?php echo $sections[$index]['hero_description']; ?>
                    </p>
                    <a class="btn btn_hero" href="<?php echo $sections[$index]['button_url']; ?>"><?php echo $sections[$index]['button_label']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>