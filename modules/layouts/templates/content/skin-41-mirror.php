<?php

/*

type: layout

name: Content 41-mirror

position: 41

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

<section class=" <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-41-mirror-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid px-0">
        <div class="row mh-650">

            <div class="row col-12 col-lg-5 mx-auto text-center text-lg-start d-flex align-items-center">
                <div class="container-fluid-left-col-in-container">
                    <div class="allow-drop pe-lg-5">
                        <h2 class="mb-4  ">WORK ‌ <br> ENJOY ‌<br> REPEAT</h2>
                        <h3 class="mb-4">In the co-working space know how to do it. Joy us!</h3>
                        <br/>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-7 mx-auto background-image-holder mh-400 " style="background-image: url('<?php print template_url(); ?>assets/img/layouts/content-41.jpg');"></div>

        </div>
    </div>
</section>
