<?php

/*

type: layout

name: Footers 25

position: 25

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
    .footer-skin-25 .white-color {
        color: #a3a3a3;
    }
</style>

<div class="footer-background " <?php print $layout_classes; ?> style="background-color: #fdf0e6;">
    <section class="footer-skin-25 edit safe-mode  "
             field="layout-footer-skin-25-<?php print $params['id'] ?>" rel="module">
        <!-- Footer -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 d-md-flex justify-content-md-center align-items-lg-center mt-lg-7 px-md-5">
                    <div class="col-md-4 col text-md-start text-center">
                        <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
                    </div>
                    <div class="col-md-4 col">
                        <module type="menu" class="footer-skin-link" template="simple" name="footer_menu_5"/>
                    </div>
                    <div class="col-md-4 col text-md-end text-center">
                        <module type="social_links"/>
                    </div>
                </div>

            </div>
        </div>
        <?php include('footer_cart.php'); ?>
    </section>
    <div class="section">
        <div class="container pt-4">
            <div class="col-12 text-center pb-3">
                <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-25-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
                <p class="noedit"><?php print powered_by_link(); ?></p>
            </div>
        </div>
    </div>
</div>
