<?php

/*

type: layout

name: Misc 9

position: 9

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

<section class="section <?php print $layout_classes; ?>safe-mode edit allow-drop"
         field="layout-misc-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row col-12 py-5 text-center justify-content-center">
            <div class="col-6 col-lg-4 mb-5 cloneable align-self-center">
                <img src="<?php print template_url(); ?>assets/img/layouts/Amazon2.png">
                <h6 class="pt-6"><?php _lang("Heading One", "templates/big"); ?></h6>
                <p class="lead"><?php _lang("Sony laptops are amont the most well known laptops on today's", "templates/big"); ?></p>
            </div>
            <div class="col-6 col-lg-4 mb-5 cloneable">
                <img src="<?php print template_url(); ?>assets/img/layouts/Google2.png">
                <h6 class="pt-6"><?php _lang("Heading Two", "templates/big"); ?></h6>
                <p class="lead"><?php _lang("Once the printer ink runs dry it has to be replaced with another", "templates/big"); ?></p>
            </div>
            <div class="col-6 col-lg-4 mb-5 cloneable">
                <img src="<?php print template_url(); ?>assets/img/layouts/Logitech.png">
                <h6 class="pt-6"><?php _lang("Heading Three", "templates/big"); ?></h6>
                <p class="lead"><?php _lang("Accessories Here you can find the best computer accessory", "templates/big"); ?></p>
            </div>
        </div>
    </div>
</section>
