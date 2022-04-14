<?php

/*

type: layout

name: Gallery 1

position: 1

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row m-0">
            <div class="col-12 col-lg-6 px-0">
                <div class="pe-md-5 pb-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="img-as-background square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg" class=" ">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="img-as-background square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg" class=" ">
                            </div>
                        </div>

                        <div class="col-12 pt-5">
                            <div class="img-as-background square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-1.jpg" class=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 px-0">
                <div class="pe-md-5 pb-5">
                    <div class="row">
                        <div class="col-12 pb-5">
                            <div class="img-as-background square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-4.jpg" class=" ">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="img-as-background square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-5.jpg" class=" ">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="img-as-background square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-6.jpg" class=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
