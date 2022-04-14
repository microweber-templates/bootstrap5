<?php

/*

type: layout

name: Gallery 4

position: 4

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="mx-auto col-sm-10 col-md-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-4-1.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h4 class="mb-2">Telescopes 101</h4>
                        <p>History of modern astronomy, there is probably no one greater.</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-4-2.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h4 class="mb-2">Moon Gazing</h4>
                        <p>History of modern astronomy, there is probably no one greater.</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-4-3.jpg" class=" "/>
                    </div>
                    <div class="allow-drop py-4 mt-md-auto mt-5">
                        <h4 class="mb-2">The Amazing Hubble</h4>
                        <p>History of modern astronomy, there is probably no one greater.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
