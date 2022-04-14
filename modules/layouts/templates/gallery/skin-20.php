<?php
/*

type: layout

name: Gallery 20

description: Gallery 20

categories: Gallery


*/
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}


$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section  <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-hero-slider-<?php print $params['id'] ?>" rel="module">
    <module type="slider" template="slickslider-skin-4" data-slides-xs="1" data-slides-sm="1" data-slides-md="1" data-slides-lg="3" data-slides-lg="3"/>
</section>


