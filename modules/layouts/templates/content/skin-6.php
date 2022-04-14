<?php

/*

type: layout

name: Content 6

position: 6

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class="mb-4   font-weight-bold">Pictures of our team</h6>
                <h1>The Amazing Team</h1>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row text-center mt-7">
            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable">
                <div class="img-as-background rounded-circle square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-6-1.jpg"/>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>Rest in the woods</h4>
                    <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn more"/>
                </div>
            </div>

            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable">
                <div class="img-as-background rounded-circle square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-6-2.jpg"/>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>Ride a bike</h4>
                    <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn more"/>
                </div>
            </div>

            <div class="mx-auto col-6 col-sm-4 mb-5 cloneable">
                <div class="img-as-background rounded-circle square">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-6-3.jpg"/>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>Yoga in the mountains</h4>
                    <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn more"/>
                </div>
            </div>
        </div>
    </div>
</section>
