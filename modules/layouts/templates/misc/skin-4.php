<?php

/*

type: layout

name: Misc 4

position: 4

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

<section class="section <?php print $layout_classes; ?>safe-mode edit allow-drop" field="layout-misc-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex">
               <div class="col-6">
                   <div class="cloneable p-3">
                       <h4><?php _lang("Do I have to pay to keep my projects published?" , "templates/big"); ?></h4>
                       <p> <?php _lang("There is something about parenthood that gives us a sense of history and a deeply rooted desire to send on into the next generation the great things we have discoveret about life. And part of that is the desire to install in our children the love of science, of learning." , "templates/big"); ?></p>
                   </div>

                   <div class="cloneable p-3">
                       <h4><?php _lang("Are there any discounts?" , "templates/big"); ?></h4>
                       <p><?php _lang("There is something about parenthood that gives us a sense of history and a deeply rooted desire to send on into the next generation the great things we have discoveret about life. And part of that is the desire to install in our children the love of science, of learning." , "templates/big"); ?></p>
                   </div>
                </div>

               <div class="col-6">
                   <div class="cloneable p-3">
                       <h4><?php _lang("What happens if I downgrade?" , "templates/big"); ?></h4>
                       <p><?php _lang("There is something about parenthood that gives us a sense of history and a deeply rooted desire to send on into the next generation the great things we have discoveret about life. And part of that is the desire to install in our children the love of science, of learning." , "templates/big"); ?></p>
                   </div>

                   <div class="cloneable p-3">
                       <h4><?php _lang("How can I switch between plans?" , "templates/big"); ?></h4>
                       <p><?php _lang("There is something about parenthood that gives us a sense of history and a deeply rooted desire to send on into the next generation the great things we have discoveret about life. And part of that is the desire to install in our children the love of science, of learning." , "templates/big"); ?></p>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>
