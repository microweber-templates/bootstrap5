<?php

/*

type: layout

name: Footers 19

position: 19

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
         field="layout-footer-skin-19-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
        <div class="row text-md-start text-center">
            <div class="col-md-5 col text-md-start text-md-left">
                <div class="pb-7 ms-3">
                    <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
                </div>
                <p class="ms-3 mb-5">Lorem Ipsum is simply dummy text <br> of the printing and typesetting industry.</p>


                <module type="menu" class="d-lg-flex justify-content-lg-start justify-content-center ps-0" template="simple" name="footer_menu_6"/>
            </div>
            <div class="col-md-4 col">
                <div>
                    <small><?php _lang('Phone', 'templates/big'); ?></small>
                    <p class="mt-2">123-456-7890</p>
                </div>
                <div>
                    <small><?php _lang('Email', 'templates/big'); ?></small>
                    <p class="mt-2"><a href="">mail@yourcompany.com</a></p>
                </div>
                <div>
                    <p><?php _lang('Social', 'templates/big'); ?></p>
                    <module type="social_links" template="skin-4"/>
                </div>
            </div>

            <div class="col-md-3 col">
                <small><?php _lang('California', 'templates/big'); ?></small>
                <p class="mt-2"><?php _lang('21 Lebsack Harbor Apt. 276 Palo Alto, CA', 'templates/big'); ?></p>

                <small><?php _lang('New York', 'templates/big'); ?></small>
                <p class="mt-2"><?php _lang('74 Howell Islands Suite 834 Rochester, NY', 'templates/big'); ?></p>
            </div>
        </div>
    </div
    <?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-19-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
