<?php

/*

type: layout

name: Content 40

position: 40

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-40-<?php print $params['id'] ?>" rel="module" data-bg-contain="true" background-position="left center">
    <div class="container">
        <div class="row flex-lg-nowrap  mh-650">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto pb-5 mb-4 pe-lg-5 text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div class="allow-drop text-center">
                    <h1 class="mb-4">Making A New Trend In Poster Printing</h1>

                    <p class="lead">To ensure the blackest blacks and sharpest colors on every print job, the Eclipse OEM-compatible toner cartridges use just premium</p>
                    <br/>
                    <module type="btn" button_style="btn-primary" button_size="btn-md px-5" text="BUTTON"/>

                    <br/>
                    <br/>
                    <br/>

                    <div class="text-center nodrop">
                        <p class="d-block mb-4">Follow us</p>

                        <module type="social_links" />
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-12 mx-auto order-1 order-lg-2 mb-4">
                <module type="slider" template="slickslider-skin-1" data-slides-xs="1" data-slides-sm="1" data-slides-md="1" data-slides-lg="1" data-slides-lg="1" center_mode="false" center_padding="0" adaptive_height="false"/>
            </div>
        </div>
    </div>
</section>
