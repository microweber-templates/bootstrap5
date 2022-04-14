<?php

/*

type: layout

name: Feature 10

position: 10

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-md-10 col-lg-8 col-lg-6 mx-auto allow-drop">
                <h6 class="  font-weight-bold">Asteroids</h6>
                <p>Stu Unger is one of the biggest superstars to have immerged from the professional poker world. </p>
            </div>
        </div>

        <div class="row text-center mt-7">
            <div class="mx-auto col-sm-6 col-md-5 mb-7 cloneable">
                <div class="px-5">
                    <div class="w-125 mx-auto icon-size-64px">
                        <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-microsoft-windows position-absolute safe-element"></i>
                        </div>
                    </div>

                    <div class="text-center mt-6 allow-drop">
                        <h4>Shooting Stars</h4>
                        <p>This article is floated online with an aim to help you find the best dvd printing solution. Dvd printing is an important feature</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-5 mb-7 cloneable">
                <div class="px-5">
                    <div class="w-125 mx-auto icon-size-64px">
                        <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-microsoft-xbox position-absolute safe-element"></i>
                        </div>
                    </div>

                    <div class="text-center mt-6 allow-drop">
                        <h4>The Glossary Of Telescopes</h4>
                        <p>This article is floated online with an aim to help you find the best dvd printing solution. Dvd printing is an important feature</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
