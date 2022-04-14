<?php

/*

type: layout

name: Footers 24

position: 24

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
    .footer-skin-24 .white-color {
        color: #a3a3a3;
    }
</style>

<section class="footer-skin-24 py-5 footer-background <?php print $layout_classes; ?> safe-mode" style="background-color: #2b2b2b;">
    <!-- Footer -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 d-md-flex justify-content-md-center align-items-lg-center mt-lg-7 px-md-5">
                <div class="col-md-7 col">
                    <module type="menu" class="footer-skin-ling-black-bg " template="simple" name="footer_menu_5"/>
                </div>
            </div>

            <div class="col-12 text-center pt-md-7">
                <small style="color: #ffffff;" class="edit mb-3" field="footer-reserved-skin-24-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
                <p class="noedit"><?php print powered_by_link(); ?></p>
            </div>
        </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>





