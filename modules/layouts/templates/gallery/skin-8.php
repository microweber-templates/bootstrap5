<?php

/*

type: layout

name: Gallery 8

position: 8

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="mx-auto col-sm-10 col-md-6 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-8-1.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h3 class="mb-2">Shooting Stars</h3>
                        <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space.</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-8-2.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h3 class="mb-2">The Amazing Hubble</h3>
                        <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
