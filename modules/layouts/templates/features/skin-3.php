<?php

/*

type: layout

name: Feature 3

position: 3

categories: Features

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
<style>
    .hover-  :hover .   {
        background: #fff !important;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row mb-3 py-4 text-center text-sm-start">
            <div class="col-sm-10 col-md-12 col-lg-6 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   py-5 px-5">
                    <div class="d-block d-sm-flex align-items-center h-100">
                        <div class="col-3 me-sm-5 mb-5 mb-sm-0 mx-auto icon-size-42px" style="width: 80px;">
                            <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-email-check-outline   position-absolute safe-element"></i>
                            </div>
                        </div>

                        <div class="col-md-9 allow-drop">
                            <h4>Pictures In The Sky</h4>
                            <p class="mb-2">Naturally, as you grow in your love of astronomy, you will</p>
                            <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-12 col-lg-6 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   py-5 px-5">
                    <div class="d-block d-sm-flex align-items-center h-100">
                        <div class="col-3 me-sm-5 mb-5 mb-sm-0 mx-auto icon-size-42px" style="width: 80px;">
                            <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-alarm   position-absolute safe-element"></i>
                            </div>
                        </div>

                        <div class="col-md-9 allow-drop">
                            <h4>Pictures In The Sky</h4>
                            <p class="mb-2">Naturally, as you grow in your love of astronomy, you will</p>
                            <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
