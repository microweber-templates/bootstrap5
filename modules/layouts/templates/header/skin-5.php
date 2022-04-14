<?php

/*

type: layout

name: Header 5

position: 5

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

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-5-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-overlay-black="true" data-overlay="3">
    <div class="mw-layout-overlay"></div>
    <div class="background-image-holder mh-100vh d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-5.jpg')">
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 text-center text-lg-start mx-auto mx-lg-0 text-white allow-drop">
                    <h1 class="header-section-title mb-6">Describe your company</h1>
                    <p class="header-section-p lead-2">Describe your company and services with few words and explain why you are the best choice.</p>

                    <div class="row nodrop d-flex justify-content-center justify-content-lg-start mt-5">
                        <a href="#" class="m-3 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-1.jpg" class="  cloneable"/></a>
                        <a href="#" class="m-3 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-2.jpg" class="  cloneable"/></a>
                    </div>
                </div>

                <div class="position-absolute bottom-0 w-100 text-center left-0">
                    <a href="#" class="btn btn-primary   btn-icon btn-lg text-opacity-7 mb-7 cloneable"><i class="mdi mdi-chevron-down icon-size-24px me-0"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
