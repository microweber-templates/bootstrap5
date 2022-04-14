<?php
/*

  type: layout

  name: All in one Slick Slider

  description: All in one Slick Slider


 */
?>
<?php ?>
<link rel="stylesheet" type="text/css" href="<?php print $config['url_to_module'] ?>/templates/slickslider-skin-4/style.css"/>

<?php if (is_array($data) and count($data) > 0): ?>
    <?php $rand = uniqid(); ?>
    <div class="slider-wrapper">
        <div class="slickSlider home-slider slick-home-slider home-slider__color-background">
            <?php foreach ($data as $count => $slide): ?>
                <div class="slide" onclick="mw.gallery(gallery<?php print $rand; ?>, <?php print $count; ?>);return false;">
                    <?php if (isset($slide['skin_file'])) { ?> <?php include $slide['skin_file'] ?> <?php } ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        gallery<?php print $rand; ?> = [
            <?php foreach ($data as $slide): ?>
            {image: "<?php print (thumbnail($slide['images'][0], 1920)); ?>"},
            <?php endforeach; ?>
        ];
    </script>
<?php endif; ?>


