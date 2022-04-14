<?php

/*

type: layout

name: Content 12

position: 12

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="container justify-content-center align-items-center">
        <div class="text-center">
            <div class="row text-center nodrop">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                    <h3>Freelance Design Tricks How To Get Away With Murder In The Workplace</h3>
                    <p class="lead mt-3 mb-6">A Pocket PC is a handheld computer, which features many of the same capabilities as a modern PC. These handy little devices allow individuals to retrieve and store e-mail messages, create a contact file, coordinate appointments, surf the internet, exchange text messages and more.</p>
                </div>
            </div>

            <div class="row col-12 justify-content-center text-center mt-5">
                <div class="col-md-3 col-6 mb-5 cloneable">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-12-1.jpg" class=" ">
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-5 cloneable">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-12-2.jpg" class=" ">
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-5 cloneable">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-12-3.jpg" class=" ">
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-5 cloneable">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-12-4.jpg" class=" ">
                    </div>
                </div>
            </div>

            <div class="allow-drop">
                <div class="cloneable mt-6">
                    <module type="btn" button_style="btn-primary   " button_size="btn-md px-5" text="LEARN MORE"/>
                </div>
            </div>
        </div>
    </div>
</section>
