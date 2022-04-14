<?php

/*

type: layout

name: Content 8

position: 8

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-10';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section py-0 edit safe-mode nodrop" field="layout-content-skin-8-<?php print $params['id'] ?>" rel="module" data-background-position="center bottom">
    <div class="background-image-holder mh-650 d-flex align-items-end" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/content-8.jpg')">
        <div class="container <?php print $layout_classes; ?>">
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                    <p class="lead mb-6">Moon Gazing</p>
                    <h1>Free Classifieds Using Them To Promote Your Stuff Online</h1>
                </div>
            </div>

            <div class="allow-drop mt-12">
                <div class="text-center nodrop">
                    <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn more"/>
                </div>
            </div>
        </div>
    </div>
</section>
