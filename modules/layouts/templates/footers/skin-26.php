<?php

/*

type: layout

name: Footers 26

position: 26

categories: Footers

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

<style>
    .footer-skin-26 .white-color {
        color: #FFFFFF;
    }
</style>

<section class="footer-skin-26 footer-background edit safe-mode  " <?php print $layout_classes; ?>
         field="layout-footer-skin-26-<?php print $params['id'] ?>" rel="module" style="background-color: #2b2b2b;">
    <!-- Footer -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center px-md-0  mt-lg-7">
               <h2 class="white-color">I’d love to show you how this can transform your life.</h2>
                <module type="btn" button_text="Book a consultation" class="d-flex justify-content-center my-5 btn-md"/>
            </div>

            <div class="col-12  text-center">
                <module type="social_links"/>
            </div>
        </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #ffffff;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-26-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
