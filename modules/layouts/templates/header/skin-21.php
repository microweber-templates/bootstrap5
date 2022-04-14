<?php

/*

type: layout

name: Content 21

position: 21

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

<section class="section mw-layout-overlay-wrapper  <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-header-skin-21-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-overlay="1">
    <div class="mw-layout-overlay"></div>
    <div class="mh-100vh d-flex align-items-center background-image-holder">
        <div class="container mw-layout-overlay-container d-flex align-items-center mh-100vh">
            <div class="row flex-lg-nowrap col-12 ms-0">
                <div class="col-12 col-sm-10 col-lg-6 pb-5 mb-4 pe-lg-5 text-center text-lg-start d-flex align-items-center justify-content-center justify-content-lg-start order-2 order-lg-1">
                    <div class="allow-drop text-white">
                        <h1 class="header-section-title">Tell more to your visitors</h1>
                        <p class="header-section-p lead">Subscribe for early access of the beta version</p>
                        <br/>
                        <br/>
                        <module type="contact_form"/>
                        <br/>

                        <small>Describe your company and services with few words and explain why you are the best choice.</small>
                    </div>
                </div>

                <div class="col-12 col-sm-10 col-lg-12 order-1 order-lg-2 mb-4 maxh-550">
                    <img src="<?php print template_url(); ?>assets/img/layouts/header-21-2.png" class="mh-100"/>
                </div>
            </div>
        </div>
    </div>
</section>
