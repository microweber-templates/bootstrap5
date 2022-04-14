<?php

/*

type: layout

name: Call to action 4

position: 4

categories: Call to Action

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-10 col-lg-5 allow-drop text-center text-lg-start d-flex flex-column justify-content-center">
                <h6 class="  text-primary">Shooting Stars</h6>
                <h4 class="mb-0">What If They Let You Run The Hubble</h4>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 allow-drop d-flex align-items-center justify-content-lg-end justify-content-center mt-2 mt-sm-0 mx-auto">
                <div class="nodrop d-flex">
                    <a href="#" class="ms-2 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-1.jpg" class=" "></a>
                    <a href="#" class="ms-2 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-2.jpg" class=" "></a>
                </div>
            </div>
        </div>
    </div>
</section>
