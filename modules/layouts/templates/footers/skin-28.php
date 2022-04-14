<?php

/*

type: layout

name: Footers 28

position: 28

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


<section class="py-5 footer-background <?php print $layout_classes; ?> edit safe-mode  "
         field="layout-footer-skin-28-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 d-md-flex justify-content-md-center align-items-lg-center px-md-0  my-lg-5">
                <div class="col-md-7 col">
                    <module type="menu" class="footer-skin-link" template="simple" name="footer_menu_5"/>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <module type="social_links"/>

            </div>
        </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>


<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 text-center">
            <small class="my-3" field="footer-reserved-skin-28-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class=" my-3"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
