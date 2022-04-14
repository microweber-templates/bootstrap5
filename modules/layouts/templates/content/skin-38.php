<?php

/*

type: layout

name: Content 38

position: 38

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-38-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto pb-5 pe-lg-5 text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div class="allow-drop">
                    <h1 class="mb-4">Thank you For Sharing</h1>
                    <br/>
                    <br/>
                    <p class="lead">If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each. You may be saying to yourself.</p>
                    <br/><br/><br/><br/>

                    <module type="social_links" />
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto order-1 order-lg-2">
                <div class="text-center text-lg-end pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-38.jpg" class=" "/>
                </div>
            </div>
        </div>
    </div>
</section>
