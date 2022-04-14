<?php

/*

type: layout

name: Content 20

position: 20

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-20-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="text-center text-lg-start pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-20.jpg" class=" "/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto pb-5 text-center text-lg-start d-flex align-items-center">
                <div class="allow-drop">
                    <h6 class="mb-4   font-weight-bold">Moon Gazing</h6>
                    <h3 class="mb-7">Vinyl Banners With Its Different Types Kinds And Applications</h3>

                    <p class="lead">The only moment, the only life we have is in the NOW. What happened a few moments or several years ago is gone, what will happen this evening, or next month when we go on holidays is not here yet. </p>

                    <br/>
                    <module type="btn" text="Learn More" button_style="btn-link" button_size=""/>
                </div>
            </div>
        </div>
    </div>
</section>
