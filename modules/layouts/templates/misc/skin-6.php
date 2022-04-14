<?php

/*

type: layout

name: Misc 6

position: 6

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

<section class="section <?php print $layout_classes; ?>safe-mode edit allow-drop cloneable" field="layout-misc-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-8 mx-auto pb-5">
                    <h3 class="text-center"><?php _lang("Free Classifieds Using Them to Promote Your Stuff Online","templates/big"); ?>.</h3>
                    <p class="text-center font-weight-bold"><?php _lang("Audio player software is used to play back sound recordings in one of the many formats available for computers today","templates/big"); ?></p>
                </div>

                <div class="row text-center py-5">
                    <div class="col-6 col-lg-2 mb-5 me-auto cloneable align-self-center">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Amazon2.png">
                    </div>
                    <div class="col-6 col-lg-2 mb-5 mx-auto cloneable">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Facebook2.png">
                    </div>
                    <div class="col-6 col-lg-2 mb-5 mx-auto cloneable">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Google2.png">
                    </div>
                    <div class="col-6 col-lg-2 mb-5 mx-auto cloneable">
                        <img src="<?php print template_url(); ?>assets/img/layouts/LinkedIn2.png">
                    </div>
                    <div class="col-6 col-lg-2 mb-5 mx-auto cloneable">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Logitech.png">
                    </div>
                </div>

              <div class="text-center allow-drop">
                  <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
              </div>
            </div>
        </div>
    </div>
</section>
