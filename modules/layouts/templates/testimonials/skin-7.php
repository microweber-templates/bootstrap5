<?php

/*

type: layout

name: Testimonial 7

position: 7

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

<section class="section    pb-0 pt-0 edit safe-mode nodrop" field="layout-testimonials-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-start text-left d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-8 col-lg-6 <?php print $layout_classes; ?> pe-lg-7 d-flex align-items-center">
                <div class="allow-drop">
                    <p class="lead-2">You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business you deal with.</p>
                    <div class="row mt-7 nodrop">
                        <div class="col-auto">
                            <h6>Jimmy Harper</h6>
                            <small>UI/UX Designer</small>
                        </div>
                        <div class="col text-end text-right">
                            <img src="<?php print template_url(); ?>assets/img/layouts/logo_linkedin.png"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-6 <?php print $layout_classes; ?> ps-lg-7 d-flex align-items-center bg-body">
                <div class="h-100 position-absolute bg-body w-100 nodrop" style="left: 100%;"></div>
                <div class="h-100 position-absolute bg-body w-100 nodrop d-lg-none" style="right: 100%;"></div>
                <div class="allow-drop">
                    <p class="lead-2">If you’re having trouble getting motivated to keep to your fitness program … or if you haven’t even got off the starting block yet, this article could change your life!</p>
                    <div class="row mt-7 nodrop">
                        <div class="col-auto">
                            <h6>Richard Underwood</h6>
                            <small>Senior Designer</small>
                        </div>
                        <div class="col text-end text-right">
                            <img src="<?php print template_url(); ?>assets/img/layouts/logo_google.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
