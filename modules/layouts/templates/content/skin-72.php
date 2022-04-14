<?php

/*

type: layout

name: Content 72

position: 72

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class=" section mw-layout-overlay-wrapper  section-silver <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-72-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row section-12 inverse p-b-0">
            <div class="col-12 allow-drop text-center">
                <h3>Discounts and Presents</h3>
                <p style="text-align-last: center; text-align: justify !important;">We are always ready to surprise you with discounts and gifts.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <module type="slider" template="slickslider-skin-1-beauty"/>
            </div>
        </div>
    </div>
</section>
