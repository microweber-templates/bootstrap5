<?php

/*

type: layout

name: Content 21

position: 21

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-21-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 mx-auto d-flex align-items-center">
                <div class="row">
                    <div class="col-auto pe-7 icon-size-64px cloneable">
                        <i class="mdi mdi-flash-circle safe-element mb-5 d-block"></i>
                    </div>

                    <div class="col allow-drop">
                        <h3>Advertising Outdoors</h3>

                        <p class="lead">One of the earliest activities we engaged in when we first got into astronomy is the same one we like to show our children just as soon as their excitement about the night sky begins to surface. That is the fun of finding constellations. But finding constellations and using them to navigate the sky is a discipline.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
