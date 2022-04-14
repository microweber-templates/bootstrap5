<?php

/*

type: layout

name: Gallery 13

position: 13

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-white text-center">
            <div class="col-12 col-lg-6 cloneable mb-6">
                <div data-overlay-black="true" data-overlay="4">
                    <div class="d-flex justify-content-center flex-column mh-300 mb-5 mb-lg-0 background-image-holder h-100  " style="background-image: url('<?php print template_url(); ?>assets/img/layouts/gallery-2-2.jpg');">
                        <div class="px-5 py-5 allow-drop">
                            <h3>Shooting Stars</h3>
                            <p>In the history of modern astronomy, there is probably no one greater leap forward than the building.</p>
                            <module type="btn" button_style="btn-link" button_size=" " text="Learn more"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 cloneable mb-6">
                <div data-overlay-black="true" data-overlay="4">
                    <div class="d-flex justify-content-center flex-column mh-300 mb-5 mb-lg-0 background-image-holder h-100  " style="background-image: url('<?php print template_url(); ?>assets/img/layouts/gallery-2-3.jpg');">
                        <div class="px-5 py-5 allow-drop">
                            <h3>Pictures In The Sky</h3>
                            <p>In the history of modern astronomy, there is probably no one greater leap forward than the building.</p>
                            <module type="btn" button_style="btn-link" button_size=" " text="Learn more"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
