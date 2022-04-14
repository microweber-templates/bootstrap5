<?php

/*

type: layout

name: Feature 4

position: 4

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class="  font-weight-bold mb-4">The Amazing Hubble</h6>
                <h3>To appreciate what is really exciting about radio astronomy, first we have to shift how we view astronomy. </h3>
            </div>
        </div>

        <div class="row text-center mt-7">
            <div class="mx-auto col-sm-6 col-md-3 mb-5 cloneable">
                <div class="w-80 mx-auto icon-size-36px">
                    <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-image position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>Asteroids</h4>
                    <p>Speaking comes to most people as naturally as breathing. On many occasions our words are.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-3 mb-5 cloneable">
                <div class="w-80 mx-auto icon-size-36px">
                    <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-plus-circle position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>Video Games Playing With Imagination</h4>
                    <p>Speaking comes to most people as naturally as breathing. On many occasions our words are.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-3 mb-5 cloneable">
                <div class="w-80 mx-auto icon-size-36px">
                    <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-play-box position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>Radio Astronomy</h4>
                    <p>Speaking comes to most people as naturally as breathing. On many occasions our words are.</p>
                </div>
            </div>
        </div>
    </div>
</section>
