<?php

/*

type: layout

name: Header 12

position: 12

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-7';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section mw-layout-overlay-wrapper  edit safe-mode nodrop" field="layout-header-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="mw-layout-overlay"></div>
    <div class="mh-100vh d-flex align-items-end" style="background: #263764;">
        <div class="container mw-layout-overlay-container text-white <?php print $layout_classes; ?>">
            <div class="row text-center nodrop">
                <div class="col-12 col-lg-8 mx-auto allow-drop">
                    <h1 class="header-section-title mb-5">Describe your company</h1>
                    <p class="header-section-p lead-2">Describe your company and services with few words and explain why you are the best choice.</p>

                    <div class="d-flex justify-content-center mt-4 mb-4 nodrop">
                        <module type="contact_form" template="subscribe-1"/>
                    </div>

                    <small>Your data will not be shared with third parties</small>
                    <br/> <br/><br/><br/>

                    <img src="<?php print template_url(); ?>assets/img/layouts/header-12.png" style="max-width: 70%;"/>
                </div>
            </div>
        </div>
    </div>
</section>
