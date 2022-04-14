<?php

/*

type: layout

name: Content 13

position: 13

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto py-4 order-2 order-lg-1">
                <div class="d-flex flex-column pe-5 h-100 allow-drop py-5">
                    <h1>The Basics Of Buying A Telescope</h1>

                    <p class="lead">Having used discount toner cartridges for twenty years, there have been a lot of changes in the toner cartridge market. The market today is approximately a twenty billion.</p>

                    <module type="btn" text="Lean more" button_style="btn-link"/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto order-1 order-lg-2">
                <div class="row d-flex flex-nowrap">
                    <div class="col-md-12 text-end text-right py-5">
                        <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                            <div class="m-4 d-flex d-sm-block">
                                <div class="background-image-holder w-250 h-250   ms-auto mb-6 me-3 me-sm-0 " style="background-image:url('<?php print template_url(); ?>assets/img/layouts/content-13-1.jpg');"></div>

                                <div class="background-image-holder w-150 h-150   ms-auto" style="background-image:url('<?php print template_url(); ?>assets/img/layouts/content-13-3.jpg');"></div>
                            </div>

                            <div class="m-4">
                                <div class="background-image-holder w-350 h-350  " style="background-image:url('<?php print template_url(); ?>assets/img/layouts/content-13-2.jpg');"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
