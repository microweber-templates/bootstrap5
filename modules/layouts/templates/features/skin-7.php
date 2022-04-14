<?php

/*

type: layout

name: Feature 7

position: 7

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12 col-lg-10 col-lg-10 mx-auto allow-drop">
                <h3>Shooting Stars</h3>
                <p class="lead">In addition to the 2.0.3 install, you should be aware that some bugs have already been found, and that a plugin will need to be installed to repair those bugs. If you modify any of the files</p>
            </div>
        </div>


        <div class="row d-flex justify-content-center text-center text-md-start">
            <div class="col-sm-10 col-md-6 col-lg-4 mb-4 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   p-5">
                    <div class="d-block d-sm-flex align-items-center">
                        <div class="allow-drop">
                            <i class="mdi mdi-weather-cloudy icon-size-36px mb-4 d-inline-block safe-element cloneable"></i>

                            <h5>COMPUTER HARDWARE</h5>
                            <p>Before we discuss all of the things that could be affecting your. </p>
                            <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-4 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   p-5">
                    <div class="d-block d-sm-flex align-items-center">
                        <div class="allow-drop">
                            <i class="mdi mdi-file-cabinet icon-size-36px mb-4 d-inline-block safe-element cloneable"></i>

                            <h5>HOW TO PROTECT</h5>
                            <p>Before we discuss all of the things that could be affecting your. </p>
                            <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-4 cloneable">
                <div class="h-100 d-flex flex-column border   hover-   p-5">
                    <div class="d-block d-sm-flex align-items-center">
                        <div class="allow-drop">
                            <i class="mdi mdi-file-document-outline icon-size-36px mb-4 d-inline-block safe-element cloneable"></i>

                            <h5>CHOOSING THE BEST AUDIO</h5>
                            <p>Before we discuss all of the things that could be affecting your. </p>
                            <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
