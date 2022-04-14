<?php

/*

type: layout

name: Content 35

position: 35

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-35-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto pb-5 pe-lg-5 text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div class="allow-drop">
                    <h1 class="mb-4">Motivation Is The First Step To Success</h1>

                    <p class="lead">The large-screen TV has come a long way from those faded-out behemoths of old that took up half your living room and never really produced a picture of decent quality. Now, however, especially in combination with HDTV, you </p>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto order-1 order-lg-2">
                <div class="text-center text-lg-end pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-35.jpg" class=" "/>
                </div>
            </div>
        </div>
    </div>
</section>
