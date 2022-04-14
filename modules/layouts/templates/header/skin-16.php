<?php

/*

type: layout

name: Header 16

position: 16

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

<section class="section mw-layout-overlay-wrapper  py-0 edit safe-mode nodrop" field="layout-header-skin-16-<?php print $params['id'] ?>" rel="module" data-background-position="center top">
    <div class="mw-layout-overlay"></div>
    <div class="background-image-holder mh-100vh" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-16-1.jpg')">
        <div class="container mw-layout-overlay-container py-0 text-white">
            <div class="row mh-100vh d-flex justify-content-between align-items-end">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto mx-lg-0 d-flex flex-column justify-content-center mh-100vh allow-drop">
                    <h1 class="header-section-title mb-6">Message to your clients</h1>
                    <p class="header-section-p lead-2">Describe your company and services with few words and explain why you are the best choice. </p>

                    <br/>

                    <div class="d-flex align-items-center nodrop">
                        <div class="cloneable mx-2">
                            <module type="btn" button_style="btn-primary   " button_size="btn-lg px-5" text="Button"/>
                        </div>
                        <div class="cloneable mx-2">
                            <module type="btn" button_style="btn-outline-primary   " button_size="btn-lg px-5" text="Button"/>
                        </div>
                    </div>
                </div>

<!--                <div class="col-12 col-lg-10 col-lg-5 mx-auto mx-lg-0 text-center text-lg-right allow-drop">-->
<!--                    <img src="--><?php //print template_url(); ?><!--assets/img/layouts/header-16-2.png"/>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</section>
