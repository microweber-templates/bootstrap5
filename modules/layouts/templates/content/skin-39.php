<?php

/*

type: layout

name: Content 39

position: 39

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-39-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-8 col-lg-8 mx-auto allow-drop">
                <i class="mdi mdi-language-html5 icon-size-62px mb-6 d-block safe-element cloneable"></i>
                <h1>Pictures In The Sky</h1>
                <p class="lead-2">What if you “think” you don’t know enough about your topic? Then, do some research. Read books and magazines. Do some searches on the Internet. Who knows? You might find an area, a niche, that is just waiting for you to fill it with useful information.</p>
                <hr class="my-5"/>
                <div class="row nodrop d-flex justify-content-center mb-3">
                    <a href="#" class="m-3 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-1.jpg" class=" "/></a>
                    <a href="#" class="m-3 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-2.jpg" class=" "/></a>
                </div>
                <small>Upgrading To Microsoft Windows Vista Tips</small>
            </div>
        </div>
    </div>
</section>
