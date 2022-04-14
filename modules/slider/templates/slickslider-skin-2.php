<?php

/*

  type: layout

  name: Slick Slider - Skin 2

  description: Slick Slider - Skin 2


*/

?>
<link rel="stylesheet" type="text/css" href="<?php print $config['url_to_module'] ?>/templates/slickslider-skin-1/style.css"/>


<div class="slickSlider-default row d-block">
    <div class="slickSlider">
        <?php foreach ($data as $slide) { ?>
            <?php if (isset($slide['skin_file'])) { ?>
                <?php include $slide['skin_file'] ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>