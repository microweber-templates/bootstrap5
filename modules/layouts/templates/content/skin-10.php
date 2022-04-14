<?php

/*

type: layout

name: Content 10

position: 10

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row cloneable mb-3 py-4">
            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-10-1.jpg" class=" "/>
                    </div>
                    <div class="allow-drop pt-4 pb-6 mt-md-auto mt-5">
                        <h4 class="mb-2">The summer forest</h4>
                        <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-10-2.jpg" class=" "/>
                    </div>
                    <div class="allow-drop pt-4 pb-6 mt-md-auto mt-5">
                        <h4 class="mb-2">Mountain castle</h4>
                        <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-10-3.jpg" class=" "/>
                    </div>
                    <div class="allow-drop pt-4 pb-6 mt-md-auto mt-5">
                        <h4 class="mb-2">The old tree</h4>
                        <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="allow-drop"></div>
    </div>
</section>
