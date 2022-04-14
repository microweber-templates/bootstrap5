<?php

/*

type: layout

name: Feature 8

position: 8

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
    .hover-bg-body:hover .bg-body {
        background: #0055ff !important;
        color: #fff;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class="  font-weight-bold   mb-4">Pictures In The Sky</h6>
                <h1>5 Reasons To Purchase Desktop Computers</h1>
                <p>Your sophistication as an amateur astronomer</p>
            </div>
        </div>

        <div class="row mb-3 py-4 text-center text-sm-start d-flex justify-content-center">
            <div class="col mb-5 cloneable">
                <div class="h-100 d-flex flex-column border      hover-bg-body p-4">
                    <div class="allow-drop">
                        <h5>Addiction When</h5>
                        <p>Many of us have at least been tempted</p>
                    </div>
                    <div style="width: 40px;" class="mt-md-auto mt-5 icon-size-24px">
                        <div class="bg-body rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-format-quote-close-outline position-absolute safe-element"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-5 cloneable">
                <div class="h-100 d-flex flex-column border      hover-bg-body p-4">
                    <div class="allow-drop">
                        <h5>5 Tips For Offshore</h5>
                        <p>Chances are unless you are very lucky you will</p>
                    </div>
                    <div style="width: 40px;" class="mt-md-auto mt-5 icon-size-24px">
                        <div class="bg-body rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-image-outline position-absolute safe-element"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-5 cloneable">
                <div class="h-100 d-flex flex-column border      hover-bg-body p-4">
                    <div class="allow-drop">
                        <h5>Pos Hardware</h5>
                        <p>Home Audio Recording For Everyone</p>
                    </div>
                    <div style="width: 40px;" class="mt-md-auto mt-5 icon-size-24px">
                        <div class="bg-body rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-hexagon-outline position-absolute safe-element"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-5 cloneable">
                <div class="h-100 d-flex flex-column border      hover-bg-body p-4">
                    <div class="allow-drop">
                        <h5>Buying Used</h5>
                        <p>Compatible Inkjet Cartridge</p>
                    </div>
                    <div style="width: 40px;" class="mt-md-auto mt-5 icon-size-24px">
                        <div class="bg-body rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-hexagram-outline position-absolute safe-element"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="allow-drop text-center">
            <module type="btn" button_style="btn-outline-primary   " button_size="btn-md" text="Learn More"/>
        </div>
    </div>
</section>
