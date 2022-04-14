<?php

/*

type: layout

name: Content 23

position: 23

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-23-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 mx-auto d-flex align-items-center">
                <div class="row">
                    <div class="col-12 col-md-auto pe-5 icon-size-52px cloneable">
                        <i class="mdi mdi-monitor safe-element mb-5 d-block"></i>
                    </div>

                    <div class="col allow-drop">
                        <h5>Compatible Inkjet Cartridge</h5>

                        <p>The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason. The large-screen TV has come a long way from those faded-out behemoths of old that took up half your living room </p>
                    </div>
                </div>
            </div>
        </div>
</section>
