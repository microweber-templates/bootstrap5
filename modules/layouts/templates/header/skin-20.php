<?php

/*

type: layout

name: Header 20

position: 20

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

<section class="section mw-layout-overlay-wrapper  <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-header-skin-20-<?php print $params['id'] ?>" rel="module">
    <div class="mw-layout-overlay"></div>
    <div class="container mw-layout-overlay-container-fluid mh-100vh d-flex align-items-center justify-content-center">
        <div class="row col-12">
            <div class="col-12 col-sm-10 col-lg-6 me-auto mb-5 px-0">
                <img class="mh-500" src="<?php print template_url(); ?>assets/img/layouts/header-20.png" />
            </div>

            <div class="col-12 col-sm-10 col-lg-6 text-center ms-auto text-lg-start d-flex align-items-center mb-5">
                <div class="container mw-layout-overlay-container-fluid-right-col-in-container mw-layout-overlay-container">
                    <div class="allow-drop ps-lg-5">
                        <h1 class="header-section-title mb-4">Your best services here</h1>

                        <p class="header-section-p lead-2">Describe your company and services with few words and explain why you are the best choice.</p>
                        <br/>

                        <module type="btn" button_style="btn-primary" button_size="btn-lg px-5" text="Read More"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
