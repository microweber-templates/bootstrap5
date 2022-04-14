<?php

/*

type: layout

name: Content 51

position: 51

categories: Content

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-51-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
                <div class="col-md-6 mb-6 cloneable position-relative display-webkit-box">
                    <a href="#" class="display-webkit-box text-decoration-no">
                        <div class="text-dark hover-text-light    hover-bg-primary   px-5 py-5 position-relative d-flex">
                            <div>
                                <h5>Space The Final Frontier</h5>
                                <p class="mb-0">Shure’s Music Phone Adapter (MPA) is our favorite</p>
                            </div>

                            <div class="me-1"><i class="mdi mdi-chevron-right icon-size-24px safe-element"></i></div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 mb-6 cloneable position-relative display-webkit-box">
                    <a href="#" class="display-webkit-box text-decoration-no">
                        <div class="text-dark hover-text-light    hover-bg-primary   px-5 py-5 position-relative d-flex">
                            <div>
                                <h5>Beyond The Naked Eye</h5>
                                <p class="mb-0">Shure’s Music Phone Adapter (MPA) is our favorite </p>
                            </div>

                            <div class="me-1"><i class="mdi mdi-chevron-right icon-size-24px safe-element"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
