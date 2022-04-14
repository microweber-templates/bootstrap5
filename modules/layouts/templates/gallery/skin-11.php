<?php

/*

type: layout

name: Gallery 11

position: 11

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-11-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 col-lg-10 mx-auto">
                <div class="row text-center text-md-start">
                    <div class="mx-auto col-sm-10 col-md-6 mb-5 cloneable">
                        <div class="h-100 d-flex flex-column">
                            <div class="img-as-background square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-11-1.jpg" class=" "/>
                            </div>
                            <div class="allow-drop py-4">
                                <p>For most of us, it’s a curiosity, an amusement to see what they say our day will be like based.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto col-sm-10 col-md-6 mt-0 mt-md-9 mb-5 cloneable">
                        <div class="h-100 d-flex flex-column">
                            <div class="img-as-background square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-11-2.jpg" class=" "/>
                            </div>
                            <div class="allow-drop py-4">
                                <p>Having used discount toner cartridges for twenty years, there have been a lot of changes in the toner.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
