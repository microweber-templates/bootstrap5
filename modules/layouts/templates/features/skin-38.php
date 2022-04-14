<?php

/*

type: layout

name: Feature 38

position: 38

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-38-<?php print $params['id'] ?>" rel="module" data-bg-contain="true" background-position="left center">
    <div class="container">
        <div class="row flex-nowrap  mh-650">
            <div class="col-12 col-sm-10 col-lg-7 mx-auto order-2 order-lg-1 mb-4">
                <div class="background-image-holder mh-550 h-100" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/feature-23.jpg');"></div>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto pb-5 mb-4 pe-lg-8 text-center text-lg-start d-flex align-items-center order-1 order-lg-2">
                <div class="allow-drop">
                    <h1>What If They Let You Run The Hubble</h1>

                    <p class="lead">Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble! Downloading music </p>

                    <div class="row py-4 text-center text-lg-start d-flex nodrop">
                        <div class="col-sm-6 col-lg-6 mb-6 cloneable">
                            <div class="h-100 d-flex flex-column">
                                <div style="width: 40px;" class="mb-5 mx-auto mx-lg-0 icon-size-32px">
                                    <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                                        <i class="mdi mdi-fish position-absolute safe-element"></i>
                                    </div>
                                </div>

                                <div class="allow-drop">
                                    <h5>How To Look Up</h5>
                                    <p>While NASA has had many ups and downs, the launch and continued.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6 mb-6 cloneable">
                            <div class="h-100 d-flex flex-column">
                                <div style="width: 40px;" class="mb-5 mx-auto mx-lg-0 icon-size-32px">
                                    <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                                        <i class="mdi mdi-compass position-absolute safe-element"></i>
                                    </div>
                                </div>

                                <div class="allow-drop">
                                    <h5>Telescopes 101</h5>
                                    <p>While NASA has had many ups and downs, the launch and continued.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <module type="btn" button_style="btn-primary" button_size="btn-md" text="Read more"/>
                </div>
            </div>

        </div>
    </div>
</section>
