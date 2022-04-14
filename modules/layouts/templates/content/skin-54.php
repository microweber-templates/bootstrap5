<?php

/*

type: layout

name: Content 54

position: 54

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-54-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 col-lg-6 mx-auto text-center allow-drop">
                <h3>Free Philippine Real Estate Ads Forums And Classifieds</h3>
                <p>Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons.</p>
                <br/>

                <div class="d-flex align-items-center justify-content-center nodrop">
                    <div class="cloneable mx-2">
                        <module type="btn" button_style="btn-primary" button_size="btn-md px-5" text="Button"/>
                    </div>
                    <div class="cloneable mx-2">
                        <module type="btn" button_style="btn-link" button_size="btn-md px-5" text="Learn More"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
