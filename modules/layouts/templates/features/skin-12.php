<?php

/*

type: layout

name: Feature 12

position: 12

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <span class="badge badge-primary mb-4 safe-element cloneable">HEADLINE</span>
                <p class="lead-2">When you enter into any new area of science, you almost always find yourself with a baffling new language of technical terms to learn before you can converse with the experts.</p>
            </div>
        </div>

        <div class="row mb-3 py-4 text-center text-sm-start d-flex justify-content-center">
            <div class="col-sm-5 col-md-6 col-lg-3 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   p-4">
                    <div class="w-80 maxw-80 mb-6 mx-auto mx-sm-0 icon-size-52px">
                        <div class="   rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-emoticon-excited-outline  position-absolute safe-element"></i>
                        </div>
                    </div>
                    <div class="allow-drop">
                        <h6>Moon Gazing</h6>
                        <p>As a business owner or manager, the decision</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 col-md-6 col-lg-3 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   p-4">
                    <div class="w-80 maxw-80 mb-6 mx-auto mx-sm-0 icon-size-52px">
                        <div class="   rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-emoticon-happy-outline  position-absolute safe-element"></i>
                        </div>
                    </div>
                    <div class="allow-drop">
                        <h6>The Amazing Hubble</h6>
                        <p>As a business owner or manager, the decision</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 col-md-6 col-lg-3 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   p-4">
                    <div class="w-80 maxw-80 mb-6 mx-auto mx-sm-0 icon-size-52px">
                        <div class="   rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-emoticon-kiss-outline  position-absolute safe-element"></i>
                        </div>
                    </div>
                    <div class="allow-drop">
                        <h6>Shooting Stars</h6>
                        <p>As a business owner or manager, the decision</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 col-md-6 col-lg-3 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   p-4">
                    <div class="w-80 maxw-80 mb-6 mx-auto mx-sm-0 icon-size-52px">
                        <div class="   rounded-circle border border-color-secondary square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-emoticon-cool-outline position-absolute safe-element"></i>
                        </div>
                    </div>
                    <div class="allow-drop">
                        <h6>Telescopes 101</h6>
                        <p>As a business owner or manager, the decision</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
