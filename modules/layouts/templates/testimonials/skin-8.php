<?php

/*

type: layout

name: Testimonial 8

position: 8

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

<section class="section    <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h3>Testimonials</h3>
                <p>It is probably the dream of any amateur astronomer to be able to be the boss of one of the great multi million dollar telescopes even if it was just for one hour or for a few shots.</p>
                <br/><br/>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row mb-3 text-center text-sm-start d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-8 col-lg-6 d-flex align-items-center my-3 cloneable">
                <div class="allow-drop bg-body   px-5 py-5">
                    <i class="mdi mdi-format-quote-close icon-size-24px   safe-element"></i>
                    <br/><br/>
                    <p>The beauty of astronomy is that anybody can do it. From the tiniest baby to the most advanced astrophysicist, there is something for anyone who wants to enjoy astronomy.</p>

                    <div class="d-block d-sm-flex align-items-center nodrop">
                        <div class="me-sm-4 mb-5 mb-sm-0 mx-auto mx-sm-0">
                            <div class="w-50 mx-auto">
                                <div class="img-as-background rounded-circle square">
                                    <img src="<?php print template_url(); ?>assets/img/layouts/team-1-4.jpg">
                                </div>
                            </div>
                        </div>

                        <div class="allow-drop">
                            <h6 class="mb-1">Mathilda Foster</h6>
                            <small class="mb-0 text-dark">UX Designer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-6 d-flex align-items-center my-3 cloneable">
                <div class="allow-drop bg-body   px-5 py-5">
                    <i class="mdi mdi-format-quote-close icon-size-24px   safe-element"></i>
                    <br/><br/>
                    <p>The beauty of astronomy is that anybody can do it. From the tiniest baby to the most advanced astrophysicist, there is something for anyone who wants to enjoy astronomy.</p>

                    <div class="d-block d-sm-flex align-items-center nodrop">
                        <div class="me-sm-4 mb-5 mb-sm-0 mx-auto mx-sm-0">
                            <div class="w-50 mx-auto">
                                <div class="img-as-background rounded-circle square">
                                    <img src="<?php print template_url(); ?>assets/img/layouts/team-1-5.jpg">
                                </div>
                            </div>
                        </div>

                        <div class="allow-drop">
                            <h6 class="mb-1">Steven Ortega</h6>
                            <small class="mb-0 text-dark">UX Designer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="allow-drop mt-7">
            <div class="row text-center d-flex align-items-center justify-content-around nodrop">
                <div class="col cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/logo_amazon.png"/>
                </div>
                <div class="col cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/logo_facebook.png"/>
                </div>
                <div class="col cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/logo_google.png"/>
                </div>
                <div class="col cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/logo_linkedin.png"/>
                </div>
                <div class="col cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/logo_logitech.png"/>
                </div>
                <div class="col cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/logo_philips.png"/>
                </div>
            </div>
        </div>
    </div>
</section>
