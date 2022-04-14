<?php

/*

type: layout

name: Header 13

position: 13

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

<section class="section mw-layout-overlay-wrapper  edit safe-mode nodrop py-0" field="layout-header-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="mw-layout-overlay"></div>
    <div class="align-items-center">
        <div class="container mw-layout-overlay-container">
            <div class="row flex-nowrap mh-100vh">
                <div class="col-12 col-sm-10 col-lg-6 mx-auto pb-5 pe-lg-5 text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                    <div class="allow-drop">
                        <h1 class="header-section-title mb-5">Secret of  <br />your business here</h1>

                        <p class="header-section-p lead">Describe your company and services with few words and explain why you are the best choice.</p>
                        <br/><br/><br/>

                        <module type="btn" button_style="btn-primary    px-5" button_size="btn-md " text="BUTTON"/>
                    </div>
                </div>

                <div class="col-12 col-sm-10 col-lg-12 mx-auto order-1 order-lg-2">
                    <div class="background-image-holder mh-550 h-100" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-13.jpg');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
