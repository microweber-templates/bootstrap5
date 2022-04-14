<?php

/*

type: layout

name: Gallery 12

position: 12

categories: Gallery

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center nodrop">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class=" ">Asteroids</h6>
                <p class="lead-3">To appreciate what is really exciting about radio astronomy, first we have to shift how we view astronomy. </p>
                <br />
                <br />
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-3 col-lg-2 d-flex align-items-start align-items-lg-center order-3 order-lg-1 my-lg-6">
                <div class="img-as-background square w-100  ">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-12-2.jpg" class=""/>
                </div>
            </div>

            <div class="col-12 col-lg-7 mx-auto order-1 order-lg-2">
                <div class="row">
                    <div class="col-md-9 d-flex align-items-center">
                        <div class="img-as-background w-100 h-300   mb-6">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-12-1.jpg" class=""/>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                        <div class="img-as-background square w-100   mb-6">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-12-6.jpg" class=""/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 d-flex align-items-start">
                        <div class="img-as-background square w-100   mb-6">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-12-3.jpg" class=""/>
                        </div>
                    </div>
                    <div class="col-md-9 d-flex align-items-center">
                        <div class="img-as-background w-100 h-300   mb-6">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-12-5.jpg" class=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-center order-2 order-lg-3 ms-auto mb-6 mb-lg-0 my-lg-6">
                <div class="img-as-background square w-100  ">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-12-7.jpg" class=""/>
                </div>
            </div>
        </div>
    </div>
</section>
