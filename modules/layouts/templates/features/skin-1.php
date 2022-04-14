<?php

/*

type: layout

name: Feature 1

position: 1

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-5 mx-auto text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div>
                    <div class="cloneable allow-drop my-6">
                        <div class="d-flex align-items-center mb-3 nodrop">
                            <i class="mdi mdi-weather-sunny   me-3 icon-size-36px safe-element"></i>
                            <h4 class="mb-0">Pictures In The Sky</h4>
                        </div>
                        <p class="lead">There are two reasons for that. First is that humans are far more visual than audio.</p>
                    </div>

                    <div class="cloneable allow-drop my-6">
                        <div class="d-flex align-items-center mb-3 nodrop">
                            <i class="mdi mdi-weather-lightning   me-3 icon-size-36px safe-element"></i>
                            <h4 class="mb-0">Asteroids</h4>
                        </div>
                        <p class="lead">There are two reasons for that. First is that humans are far more visual than audio.</p>
                    </div>

                    <div class="cloneable allow-drop my-6">
                        <div class="d-flex align-items-center mb-3 nodrop">
                            <i class="mdi mdi-weather-snowy   me-3 icon-size-36px safe-element"></i>
                            <h4 class="mb-0">Shooting Stars</h4>
                        </div>
                        <p class="lead">There are two reasons for that. First is that humans are far more visual than audio.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-7 mx-auto order-1 order-lg-2">
                <div class="text-center text-lg-end pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/feature-1.jpg" class=" "/>
                </div>
            </div>
        </div>
    </div>
</section>
