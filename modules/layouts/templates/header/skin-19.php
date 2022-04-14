<?php

/*

type: layout

name: Header 19

position: 19

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


<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-19-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-overlay-primary="true" data-overlay="4" style="background-color: #686340;">
    <div class="mw-layout-overlay"></div>
    <div class="mh-100vh d-flex align-items-center background-image-holder">
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
            <div class="row text-center">
                <div class="col-12 col-lg-10 mx-auto text-white allow-drop">
                    <h1 class="header-section-title text-dark">Secret of your business here</h1>
                    <p class="header-section-p lead mb-7 text-dark">Describe your company and services with few words and explain why you are the best choice.</p>
                    <module type="btn" button_style="btn-primary" button_size="btn-lg px-5" text="Button"/>
                </div>
            </div>
        </div>
    </div>
</section>
