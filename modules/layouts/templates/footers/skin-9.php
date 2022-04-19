<?php

/*

type: layout

name: Footers 9

position: 9

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

<section class="  footer-background <?php print $layout_classes; ?> edit safe-mode  "
         field="layout-footer-skin-9-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-12 d-md-flex justify-content-md-center align-items-lg-center mt-lg-7 px-md-5">
                <div class="col-md-2 col text-md-start text-center">
                    <div class="pb-2">
                        <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
                    </div>
                </div>
                <div class="col-md-7 col">
                    <module type="menu" class="footer-skin-link" template="simple" name="footer_menu_5"/>
                </div>
                <div class="col-md-3 col text-md-end text-center">
                    <module type="social_links"/>
                </div>
            </div>
       </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2">
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-9-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
