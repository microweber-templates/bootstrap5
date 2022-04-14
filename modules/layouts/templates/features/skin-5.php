<?php

/*

type: layout

name: Feature 5

position: 5

categories: Features

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-7">
            <div class="col-12 col-lg-10 col-lg-10 mx-auto allow-drop">
                <h3 class="mb-4">The Glossary Of Telescopes</h3>
                <p class="lead">In addition to the 2.0.3 install, you should be aware that some bugs have already been found, and that a plugin will need to be installed to repair those bugs. If you modify any of the files</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 pe-lg-7 mb-6">
                <div class="h-100 d-flex flex-column allow-drop">
                    <div>
                        <i class="mdi mdi-account-cowboy-hat icon-size-36px   d-inline-block safe-element mb-5 cloneable"></i>
                        <h5>Pictures In The Sky</h5>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology</p>
                        <img src="<?php print template_url(); ?>assets/img/layouts/feature-5.png" class="w-auto"/>
                    </div>

                    <module type="btn" class="mt-md-auto mt-5" button_style="btn-primary   " button_size="btn-md px-5" text="PLAY NOW"/>
                </div>

                <div class="border-end border-color-secondary border-width-2 position-absolute h-100 right-0 top-0 d-none d-md-block nodrop"></div>
            </div>

            <div class="col-md-6 ps-lg-9 mb-6">
                <div class="h-100 d-flex flex-column allow-drop">
                    <i class="mdi mdi-account icon-size-36px   d-inline-block safe-element mb-5 cloneable"></i>
                    <h5>Shooting Stars</h5>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology</p>

                    <div class="row nodrop">
                        <div class="col-6 cloneable">
                            <ul class="ul no-style ps-0">
                                <li class="mb-3 cloneable"><i class="mdi mdi-check-circle icon-size-20px safe-element me-2"></i> Feature One</li>
                                <li class="mb-3 cloneable"><i class="mdi mdi-check-circle icon-size-20px safe-element me-2"></i> Feature Two</li>
                                <li class="mb-3 cloneable"><i class="mdi mdi-check-circle icon-size-20px safe-element me-2"></i> Feature Three</li>
                            </ul>
                        </div>
                        <div class="col-6 cloneable">
                            <ul class="ul no-style ps-0">
                                <li class="mb-3 cloneable"><i class="mdi mdi-check-circle icon-size-20px safe-element me-2"></i> Feature Four</li>
                                <li class="mb-3 cloneable"><i class="mdi mdi-check-circle icon-size-20px safe-element me-2"></i> Feature Five</li>
                            </ul>
                        </div>
                    </div>

                    <module type="btn" button_style="btn-outline-primary   " button_size="btn-md px-5" text="TRY FREE"/>
                </div>
            </div>
        </div>
    </div>
</section>
