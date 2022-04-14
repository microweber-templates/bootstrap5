<?php

/*

type: layout

name: Misc 7

position: 7

categories: Misc

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

if (page_title()) {
    $title = page_title();
}
?>

<section class="section <?php print $layout_classes; ?>safe-mode edit allow-drop cloneable" field="layout-misc-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="col-4 ps-0 me-auto pb-5">
                    <h5><?php _lang("Space The Final Frontier","templates/big"); ?></h5>
                    <p><?php _lang("But for many of us, it was that first time we sal a rain of fire from.","templates/big"); ?></p>
                </div>

                <div class="col-8 row align-self-center text-center py-5">
                    <div class="col-6 col-lg-3 mb-5 cloneable">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Facebook2.png">
                    </div>
                    <div class="col-6 col-lg-3 mb-5 cloneable">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Google2.png">
                    </div>
                    <div class="col-6 col-lg-3 mb-5 cloneable">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Logitech.png">
                    </div>
                    <div class="col-6 col-lg-3 mb-5 cloneable pe-0">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Philips.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
