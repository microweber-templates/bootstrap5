<?php

/*

type: layout

name: Feature 2

position: 2

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


<section class="section features-skin-2 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h3>The Glossary Of Telescopes</h3>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row text-center mt-7">
            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable">
                <div class="maxw-250 mx-auto">
                    <div class="border rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="features-skin-2-icons mdi mdi-email-open   position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <p class="lead">To get started in learning how to observe the stars much better, there are some basic things.</p>
                </div>
            </div>

            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable">
                <div class="maxw-250 mx-auto">
                    <div class="border rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="features-skin-2-icons mdi mdi-shield-star   position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <p class="lead">To get started in learning how to observe the stars much better, there are some basic things.</p>
                </div>
            </div>

            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable">
                <div class="maxw-250 mx-auto">
                    <div class="border rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="features-skin-2-icons mdi mdi-hexagon-slice-4   position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <p class="lead">To get started in learning how to observe the stars much better, there are some basic things.</p>
                </div>
            </div>
        </div>
    </div>
</section>
