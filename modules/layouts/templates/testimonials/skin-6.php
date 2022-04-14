<?php

/*

type: layout

name: Testimonial 6

position: 6

categories: Testimonials

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row mb-3 py-4 text-center text-sm-start d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-8 col-lg-5 py-5 d-flex align-items-center">
                <div class="allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/logo_google.png" />
                    <br /><br />
                    <p class="lead">“If you are in the market for a computer, there are a number of factors to consider. Will it be used for your home, your office or perhaps even”</p>
                    <h6>Sylvia Becker</h6>
                    <small>UI/UX Designer</small>
                </div>
            </div>

            <div class="col-lg-1 d-none d-lg-inline-block text-center">
                <div class="border-end border-color-secondary border-width-2 h-100 mx-auto top-0 d-inline-block text-center w-auto nodrop"></div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-5 py-5 d-flex align-items-center">
                <div class="allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/logo_logitech.png" />
                    <br /><br />
                    <p class="lead">“If you are in the market for a computer, there are a number of factors to consider. Will it be used for your home, your office or perhaps even”</p>
                    <h6>Nellie Bryant</h6>
                    <small>UI/UX Designer</small>
                </div>
            </div>
        </div>
    </div>
</section>
