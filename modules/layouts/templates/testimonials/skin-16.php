<?php

/*

type: layout

name: Testimonial 16

position: 16

categories: Testimonials

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-8';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-8';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section pb-0 pt-0 edit safe-mode nodrop" field="layout-testimonials-skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-start text-left d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-8 col-lg-6 <?php print $layout_classes; ?> pe-lg-9 d-flex align-items-center">
                <div class="allow-drop">
                    <h6 class="  mb-3">Shooting Stars</h6>
                    <h3>For Women Only Your Computer Usage Could Cost You Your Job</h3>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-6 <?php print $layout_classes; ?> ps-lg-10 d-flex align-items-center   ">
                <div class="h-100 position-absolute    w-100 nodrop" style="left: 100%;"></div>
                <div class="h-100 position-absolute    w-100 nodrop d-lg-none" style="right: 100%;"></div>
                <div class="allow-drop text-center text-lg-end">
                    <div class="w-80 mx-auto mb-6 nodrop">
                        <div class="img-as-background rounded-circle square">
                            <img src="<?php print template_url(); ?>assets/img/layouts/team-3-2.jpg">
                        </div>
                    </div>

                    <p>“Why read motivational sayings? For motivation! You might need a bit, if you can last year’s list”</p>
                    <h6>Dennis Munoz</h6>
                </div>
            </div>
        </div>
    </div>
</section>
