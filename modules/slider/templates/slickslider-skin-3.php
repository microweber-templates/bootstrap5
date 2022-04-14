<link rel="stylesheet" type="text/css" href="<?php print $config['url_to_module'] ?>/templates/slickslider-skin-1/style.css"/>

<div class="slickSlider-skin-3">
    <div class="slickSlider">
        <?php foreach ($data as $slide) { ?>
            <?php if (isset($slide['skin_file'])) { ?>
                <?php include $slide['skin_file'] ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>
