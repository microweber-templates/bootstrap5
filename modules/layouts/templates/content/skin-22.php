<?php

/*

type: layout

name: Content 22

position: 22

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-22-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-7 mx-auto pb-5 text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div class="allow-drop">
                    <h5>How To Meet That Special Someone</h5>

                    <p class="lead">There is no better advertisement campaign that is low cost and also successful at the same time. Great business ideas when utilized effectively can save lots of money. This is not only easy for those who work full-time as an advertiser, but also for those.</p>

                    <module type="btn" text="Learn More" button_style="btn-link" button_size=""/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-5 mx-auto order-1 order-lg-2">
                <div class="text-center text-lg-end pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-22.jpg" class=" "/>
                </div>
            </div>
        </div>
    </div>
</section>
