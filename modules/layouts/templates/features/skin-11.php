<?php

/*

type: layout

name: Feature 11

position: 11

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-11-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row mb-3 py-4 text-center text-sm-start d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-8 col-lg-6 mb-6 cloneable">
                <div class="d-block d-sm-flex align-items-start h-100 px-3">
                    <div class="col-2 me-sm-3 mb-5 mb-sm-0 mx-auto mx-sm-0 w-80 maxw-80 icon-size-42px">
                        <div class="rounded-circle square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-keyboard position-absolute safe-element"></i>
                        </div>
                    </div>

                    <div class="allow-drop col-md-10 px-0">
                        <h5>The Amazing Hubble</h5>
                        <p>Astronomy is one of the oldest sciences of all time. When archeologists unearth ancient civilizations, even as far back as the cavemen, they invariably find art that shows mans unquenchable fascination.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-6 mb-6 cloneable">
                <div class="d-block d-sm-flex align-items-start h-100 px-3">
                    <div class="col-2 me-sm-3 mb-5 mb-sm-0 mx-auto mx-sm-0 w-80 maxw-80 icon-size-42px">
                        <div class="rounded-circle square d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-mouse position-absolute safe-element"></i>
                        </div>
                    </div>

                    <div class="allow-drop col-md-10 px-0">
                        <h5>The Basics Of Buying A Telescope</h5>
                        <p>Astronomy is one of the oldest sciences of all time. When archeologists unearth ancient civilizations, even as far back as the cavemen, they invariably find art that shows mans unquenchable fascination.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
