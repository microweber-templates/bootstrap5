<?php

/*

type: layout

name: Misc 11

position: 11

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

<section class="section <?php print $layout_classes; ?>safe-mode edit allow-drop" field="layout-misc-skin-11-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-8 mx-auto pb-5">
                    <h3 class="text-center"><?php _lang("The Glossary Of Telescopes","templates/big"); ?></h3>
                    <p class="text-center font-weight-bold"><?php _lang("I can change any and everything in my life by simply changing myself. This puts me in the driving seat of my life and makes","templates/big"); ?></p>
                </div>

                <div class="col-12 d-flex justify-content-center text-center pb-5">
                    <module type="tabs" template="new" default_content="1" class="tabs" />
                </div>

              <div class="text-center mt-5 allow-drop">
                  <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
              </div>
            </div>
        </div>
    </div>
</section>
