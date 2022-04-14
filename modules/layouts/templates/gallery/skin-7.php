<?php

/*

type: layout

name: Gallery 7

position: 7

categories: Gallery

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="mx-auto col-sm-5 col-md-3 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-7-1.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h5 class="mb-2">Pictures In The Sky</h5>
                        <p>History of modern astronomy, there is probably no one.</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-5 col-md-3 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-7-2.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h5 class="mb-2">Radio Astronomy</h5>
                        <p>History of modern astronomy, there is probably no one.</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-5 col-md-3 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-7-3.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h5 class="mb-2">The Amazing Hubble</h5>
                        <p>History of modern astronomy, there is probably no one.</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-5 col-md-3 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-7-4.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h5 class="mb-2">Look Up In The Sky</h5>
                        <p>History of modern astronomy, there is probably no one.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
