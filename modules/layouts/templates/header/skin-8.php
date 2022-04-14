<?php

/*

type: layout

name: Header 8

position: 8

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

<section class="section mw-layout-overlay-wrapper  <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-header-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="mw-layout-overlay"></div>
    <div class="container mw-layout-overlay-container-fluid">
        <div class="row mh-650">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto mb-5 px-0">
                <module type="slider" template="slickslider-skin-3" data-slides-xs="1" data-slides-sm="1" data-slides-md="1" data-slides-lg="1" data-slides-lg="1" pager="false" controls="true" center_mode="false" center_padding="0" adaptive_height="false"/>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto text-center text-lg-start d-flex align-items-center mb-5">
                <div class="container mw-layout-overlay-container-fluid-right-col-in-container mw-layout-overlay-container">
                    <div class="allow-drop ps-lg-5">
                        <h1 class="header-section-title mb-4">Describe your company</h1>

                        <p class="header-section-p lead">Describe your company and services with few words and explain why you are the best choice.</p>
                        <br/>

                        <module type="btn" button_style="btn-primary" button_size="btn-lg px-5" text="Button"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
