<?php

/*

type: layout

name: Header 15

position: 15

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section mw-layout-overlay-wrapper  <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-header-skin-15-<?php print $params['id'] ?>" rel="module">
    <div class="mw-layout-overlay"></div>
    <div class="mh-90vh d-flex align-items-end">
        <div class="container mw-layout-overlay-container">
            <div class="row text-center nodrop">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                    <h1 class="header-section-title">Your best services here</h1>
                    <p class="header-section-p lead">Describe your company and services with few words and explain why you are the best choice.</p>
                    <br/>

                    <img src="<?php print template_url(); ?>assets/img/layouts/header-15.png"/>
                </div>
            </div>
        </div>
    </div>
</section>
