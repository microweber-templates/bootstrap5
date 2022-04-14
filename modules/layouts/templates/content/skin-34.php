<?php

/*

type: layout

name: Content 34

position: 34

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-34-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-8 col-lg-8 mx-auto allow-drop">
                <h5 class="mb-7">Free Real Estate Listing</h5>

                <div class="nodrop d-flex justify-content-around">
                    <i class="mdi mdi-earth icon-size-72px mb-7 safe-element cloneable"></i>
                    <i class="mdi mdi-glass-mug-variant icon-size-72px mb-7 safe-element cloneable"></i>
                    <i class="mdi mdi-human-greeting icon-size-72px mb-7 safe-element cloneable"></i>
                </div>
                <p class="lead-2">What if you “think” you don’t know enough about your topic? Then, do some research. Read books and magazines. Do some searches on the Internet. Who knows? You might find an area, a niche, that is just waiting for you to fill it with useful information.</p>
            </div>
        </div>
    </div>
</section>
