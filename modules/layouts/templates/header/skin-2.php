<?php

/*

type: layout

name: Header 2

position: 2

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

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-2-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-overlay-black="true" data-overlay="4">
    <div class="mw-layout-overlay"></div>
    <div class="background-image-holder mh-100vh d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-2.jpg')">
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto text-white allow-drop">
                    <h1 class="header-section-title">Heading of your website</h1>
                    <p class="header-section-p lead">Describe your company and services with few words and explain why you are the best choice.</p>
                </div>

                <div class="position-absolute bottom-0 w-100 text-center left-0">
                    <a href="#" class="btn btn-light   btn-icon btn-lg mb-7 cloneable"><i class="mdi mdi-chevron-down icon-size-24px text-muted me-0"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
