<?php

/*

type: layout

name: Header 1

position: 1

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

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-1-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-overlay-black="true" data-overlay="5">
    <div class="mw-layout-overlay"></div>
    <div class="background-image-holder mh-100vh d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-1.jpg')">
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-10 mx-auto text-white allow-drop">
                    <h1 class="header-section-title mb-7">Describe your company </h1>
                    <p class="header-section-p lead mb-7">Describe your company and services with few words and explain why you are the best choice.</p>
                    <module type="btn" button_style="btn-primary   " button_size="btn-lg px-5" text="Call to action"/>
                </div>
            </div>
        </div>
    </div>
</section>
