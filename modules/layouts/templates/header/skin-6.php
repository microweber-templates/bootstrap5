<?php

/*

type: layout

name: Header 6

position: 6

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-5';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="mw-layout-overlay"></div>
    <div class="mh-100vh d-flex align-items-center background-image-holder">
        <div class="container mw-layout-overlay-container">
            <div class="row">
                <div class="col-12 col-lg-12 col-lg-12">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-7 allow-drop py-4">
                            <h1 class="header-section-title mb-4">Describe your company</h1>
                            <p class="header-section-p lead-2 mb-6">Describe your company and services with few words and explain why you are the best choice.</p>

                            <div class="nodrop d-flex align-items-center mb-6">
                                <div class="me-1 me-lg-3 cloneable w-150">
                                    <a href="#"><img src="<?php print template_url(); ?>assets/img/layouts/header-6-1.png" class=" "/></a>
                                </div>

                                <div class="me-1 me-lg-3 cloneable w-150">
                                    <a href="#"><img src="<?php print template_url(); ?>assets/img/layouts/header-6-2.png" class=" "/></a>
                                </div>

                                <div class="me-1 me-lg-3 cloneable">
                                    <module type="video" template="dialog">
                                </div>
                            </div>

                            <p class="header-section-p">Describe your company and services with few words and explain why you are the best choice.</p>
                        </div>

                        <div class="col-12 col-sm-10 col-md-8 col-lg-5 py-4">
                            <div class="ps-0 ps-lg-5">
                                <img src="<?php print template_url(); ?>assets/img/layouts/header-6.png" class=" "/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
