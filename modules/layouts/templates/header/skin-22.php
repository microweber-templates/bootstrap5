<?php

/*

type: layout

name: Header 22

position: 22

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

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-22-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-overlay-black="true" data-overlay="5">
    <div class="mw-layout-overlay"></div>
    <div class="background-image-holder mh-100vh d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-22.jpg')">
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto text-white allow-drop">
                    <h1 class="header-section-title">Message to your clients</h1>
                    <p class="header-section-p lead">Describe your company and services with few words and explain why you are the best choice.</p>

                    <div class="d-flex justify-content-center mt-7 nodrop">
                        <module type="contact_form" template="subscribe-1"/>
                    </div>
                </div>

<!--                <div class="position-absolute bottom-0 w-100 text-center left-0">-->
<!--                    <a href="#" class="btn btn-light   btn-icon btn-lg mb-7 cloneable"><i class="mdi mdi-chevron-down icon-size-24px text-muted"></i></a>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</section>
