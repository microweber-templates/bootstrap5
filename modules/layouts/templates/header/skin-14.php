<?php

/*

type: layout

name: Header 14

position: 14

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


<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-14-<?php print $params['id'] ?>" rel="module" data-parallax="true" data-background-position="center center" data-overlay="1">
    <div class="mw-layout-overlay"></div>
    <div class="background-image-holder mh-100vh d-flex align-items-end" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-14.jpg')">
        <div class="mh-50vh w-100 text-center d-flex align-items-center <?php print $layout_classes; ?>">
            <div class="container mw-layout-overlay-container">
                <div class="row">
                    <div class="col-12 col-lg-10 col-lg-10 mx-auto allow-drop">
                        <h1 class="header-section-title">The slogan of your business</h1>
                        <p class="header-section-p lead-2 mb-7">Describe your company and services with few words and explain why you are the best choice.</p>

                        <div class="me-2 me-lg-4 cloneable">
                            <module type="btn" button_style="btn-outline-primary" button_size="btn-lg px-5" text="Button"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
