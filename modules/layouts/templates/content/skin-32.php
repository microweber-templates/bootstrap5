<?php

/*

type: layout

name: Content 32

position: 32

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-32-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 mx-auto d-md-flex align-items-center">
                <div class="col-12 col-md-10 text-center text-md-start allow-drop order-md-1 order-2">
                    <h5 class=" ">Las Vegas How To Have Non Gambling Related Fun</h5>

                    <p>A Pocket PC is a handheld computer, which features many of the same capabilities as a modern PC. These handy little devices allow individuals to retrieve and store e-mail messages, create a contact file, coordinate appointments, surf the internet, exchange text messages and more.</p>

                    <module type="btn" text="Learn More" button_style="btn-link"/>
                </div>

                <div class="col-12 col-md-2 text-center ps-md-5 cloneable d-flex align-items-center justify-content-center order-md-2 order-1 icon-size-72px">
                    <i class="mdi mdi-star-circle-outline safe-element mb-md-5"></i>
                </div>
            </div>
        </div>
    </div>
</section>
