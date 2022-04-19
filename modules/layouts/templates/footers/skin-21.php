<?php

/*

type: layout

name: Footers 21

position: 21

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
         field="layout-footer-skin-21-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-7 row d-flex text-center ">
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
        <div class="text-center col-md-6 mx-auto justify-content-center">
            <p class="font-weight-bold ms-3 lead"><?php _lang('Payment Methods', 'templates/big'); ?></p>
            <p class="text-center lead"><?php _lang(' It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction', 'templates/big'); ?></p>
            <img class="  my-3 mx-1" src="<?php print template_url(); ?>assets/img/layouts/Payment_Visa.png" >
            <img class="  my-3 mx-1" src="<?php print template_url(); ?>assets/img/layouts/Payment_Mastercard.png" >
            <img class="  my-3 mx-1" src="<?php print template_url(); ?>assets/img/layouts/Payment_Paypal.png" >

        </div>

        <div class="text-center mt-md-7 mt-5">
            <div class="my-3">
                <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
            </div>
            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>

        </div>

    </div>
    <?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-21-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
