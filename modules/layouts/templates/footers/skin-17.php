<?php

/*

type: layout

name: Footers 17

position: 17

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
         field="layout-footer-skin-17-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-7 row d-flex text-md-start text-center ps-md-0">
                <div class="col-md-3 col">
                    <p class="font-weight-bold ms-3 lead"><?php _lang('Category', 'templates/big'); ?> </p>
                    <module type="menu" template="simple" name="footer_menu_1"/>
                </div>

                <div class="col-md-3 col">
                    <p class="font-weight-bold ms-3 lead"><?php _lang('Category', 'templates/big'); ?></p>
                    <module type="menu" template="simple" name="footer_menu_2"/>
                </div>

                <div class="col-md-3 col">
                    <p class="font-weight-bold ms-3 lead"><?php _lang('Category', 'templates/big'); ?></p>
                    <module type="menu" template="simple" name="footer_menu_3"/>
                </div>
            </div>
            <div class="col-md-5 col">
                <module type="contact_form" template="subscribe-6"/>

            </div>
        </div>
    </div>

    <div class="col-12    d-md-flex justify-content-center align-items-center text-md-start text-center px-md-5">
        <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />

        <div class="mb-sm-0 mb-3 col-2 ps-2 noedit"></div>
        <module type="social_links" class="col-md-4 py-sm-0 py-4 px-0 text-md-end text-md-right module module-social-links "/>
    </div>
<?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-17-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
