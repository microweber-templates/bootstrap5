<?php

/*

type: layout

name: Content 49

position: 49

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-49-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="mx-auto col mb-6 cloneable">
                <div class="mh-250 h-100 d-flex align-items-center border   p-5 hover-bg-primary hover-text-light">
                    <h5 class="m-0">Getting Free Publicity For Your Business</h5>
                </div>
            </div>

            <div class="mx-auto col mb-6 cloneable">
                <div class="mh-250 h-100 d-flex align-items-center border   p-5 hover-bg-primary hover-text-light">
                    <h5 class="m-0">Search Engine Optimization And Advertising</h5>
                </div>
            </div>

            <div class="mx-auto col mb-6 cloneable">
                <div class="mh-250 h-100 d-flex align-items-center border   p-5 hover-bg-primary hover-text-light">
                    <h5 class="m-0">Trade Show Promotions</h5>
                </div>
            </div>

            <div class="mx-auto col mb-6 cloneable">
                <div class="mh-250 h-100 d-flex align-items-center border   p-5 hover-bg-primary hover-text-light">
                    <h5 class="m-0">Free Real Estate Listings</h5>
                </div>
            </div>
        </div>
    </div>
</section>
