<?php

/*

type: layout

name: Content 15

position: 15

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-15-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="mb-3 py-4">
            <module type="slider" template="slickslider-skin-2" data-slides-xs="1" data-slides-sm="1" data-slides-md="3" data-slides-lg="4" data-slides-lg="4" center_mode="false" center_padding="0" adaptive_height="false" pager="false"/>
        </div>

        <div class="row cloneable pb-4">
            <div class="col-12 allow-drop">
                <module type="btn" button_style="btn-link" text="See More"/>
            </div>
        </div>
    </div>
</section>
