<?php

/*

type: layout

name: Misc 5

position: 5

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

<section class="section <?php print $layout_classes; ?>safe-mode edit allow-drop cloneable" field="layout-misc-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-8 mx-auto">
                    <h1 class="text-center"><?php _lang("Free Classifieds Using Them to Promote Your Stuff Online","templates/big"); ?>.</h1>
                    <p class="lead text-center font-weight-bold"><?php _lang("Audio player software is used to play back sound recordings in one of the many formats available for computers today","templates/big"); ?></p>
                </div>

                <div class="row text-center my-5">
                    <div class="col-6 col-lg-3 mb-5 big-misc-skin-5-image cloneable align-self-center">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Amazon.png">
                    </div>
                    <div class="col-6 col-lg-3 mb-5 big-misc-skin-5-image cloneable align-self-center">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Facebook.png">
                    </div>
                    <div class="col-6 col-lg-3 mb-5 big-misc-skin-5-image cloneable align-self-center">
                        <img src="<?php print template_url(); ?>assets/img/layouts/Google.png">
                    </div>
                    <div class="col-6 col-lg-3 mb-5 big-misc-skin-5-image cloneable align-self-center">
                        <img src="<?php print template_url(); ?>assets/img/layouts/LinkedIn.png">
                    </div>
                </div>

              <div class="text-center allow-drop">
                  <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
              </div>
            </div>
        </div>
    </div>
</section>
