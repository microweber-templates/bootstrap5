<?php

/*

type: layout

name: Header 3

position: 3

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

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="mw-layout-overlay"></div>
    <div class="mh-100vh d-flex align-items-center mw-big-skin-3-background">
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-10 mx-auto">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-7 allow-drop py-4">
                            <h1 class="header-section-title">Heading of your website</h1>
                            <p class="header-section-p lead mb-7">Describe your company and services with few words and explain why you are the best choice.</p>

                            <div class="nodrop d-flex align-items-center justify-content-center">
                                <div class="ms-4 me-lg-3 cloneable">
                                    <module type="video" template="dialog">
                                </div>
                                <div class="me-1 me-lg-3">
                                    <p class="header-section-p lead mb-0">Some text</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-10 col-md-8 col-lg-5 py-4">
                            <img src="<?php print template_url(); ?>assets/img/layouts/header-3.png" class=" "/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
