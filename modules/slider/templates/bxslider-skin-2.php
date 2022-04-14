<?php

/*

  type: layout

  name: BxSlider - Skin 2

  description: BxSlider - Skin 2


*/

?>
<link rel="stylesheet" type="text/css" href="<?php print $config['url_to_module'] ?>/templates/bxslider-skin-1/style.css"/>
<?php
$thumb_quality_y = '1920';
$thumb_quality_y = $thumb_quality_y / $slides_xl;
?>

<style>
    .bx-pager a {
        opacity: 0.5;
        width: 200px;
        height: 80px;
    }

    .bx-pager a.active {
        opacity: 1;
    }
</style>

<div class="bxSlider-skin-2 position-relative">
    <div class="bxSlider">
        <?php foreach ($data as $slide) { ?>
            <?php if (isset($slide['skin_file'])) { ?>
                <?php include $slide['skin_file'] ?>
            <?php } ?>
        <?php } ?>
    </div>

    <div class="position-absolute bottom-0 left-0 w-100">
        <div class="container">
            <div class="bx-pager d-flex">
                <?php foreach ($data as $key => $slide) { ?>
                    <?php
                    if (isset($slide['primaryText'])) {
                        $primaryText = $slide['primaryText'];
                    }
                    ?>
                    <a data-slide-index="<?php echo $key; ?>" href="javascript:;" class="px-2 d-block border-start border-width-4 border-color-primary text-decoration-none me-3">
                        <small class="  font-weight-bold text-dark"><?php echo $primaryText; ?></small>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
