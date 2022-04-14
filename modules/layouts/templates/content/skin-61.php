<?php

/*

type: layout

name: Content 61

position: 61

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

<section class="section <?php print $layout_classes; ?> edit" field="layout-content-skin-61-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid " style="min-height: 600px!important;">
        <div class="row position-relative">
            <div class="col-xl-5 col-lg-6 allow-drop position-lg-absolute px-0" style="left: 5%; top: 20%; min-height: 400px!important;">
                <div class="mh-400 p-5 d-flex align-items-center" style="background-color: #0a98b4; font-size: 40px; line-height: 1.3;">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </div>
            </div>

            <div class="col-xl-6 col-lg-7 mx-auto background-image-holder mh-700 mb-5" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/feature-22.jpg');">

            </div>
        </div>
    </div>
</section>
