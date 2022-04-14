<?php

/*

type: layout

name: Header 7

position: 7

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

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-7-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-overlay-black="true" data-overlay="4">
    <div class="mw-layout-overlay"></div>
    <div class="background-image-holder mh-100vh d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-7.jpg')">
        <div class="container mw-layout-overlay-container text-white <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 text-center text-lg-start allow-drop">
                    <h1 class="header-section-title mb-6">Describe your company <span class="text-warning">.</span></h1>
                    <p class="header-section-p lead">Describe your company and services with few words and explain why you are the best choice. </p>

                    <br/><br/><br/><br/>

                    <div class="cloneable">
                        <module type="btn" button_style="btn-warning   " button_size="btn-lg px-5" text="Buy ticket"/>
                    </div>

                    <br/><br/>

                    <p class="header-section-p lead-2"><i class="mdi mdi-map-marker"></i> Sofia, Bulgaria</p>
                </div>
            </div>
        </div>
    </div>
</section>
