<?php

/*

type: layout

name: Content 1

position: 1

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="text-center">
            <div class="row text-center nodrop">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                    <p class="lead mb-3">Moon Gazing</p>
                    <h1>Free Classifieds Using Them To Promote Your Stuff Online</h1>
                </div>
            </div>

            <div class="allow-drop"></div>

            <div class="row text-center mt-5">
                <div class="col-6 col-lg-3 mb-5 cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-1-1.jpg" class=" "/>
                </div>
                <div class="col-6 col-lg-3 mb-5 cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-1-2.jpg" class=" "/>
                </div>
                <div class="col-6 col-lg-3 mb-5 cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-1-3.jpg" class=" "/>
                </div>
                <div class="col-6 col-lg-3 mb-5 cloneable">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-1-4.jpg" class=" "/>
                </div>
            </div>

            <div class="allow-drop">
                <div class="d-inline-block cloneable">
                    <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn more"/>
                </div>
            </div>
        </div>
    </div>
</section>
