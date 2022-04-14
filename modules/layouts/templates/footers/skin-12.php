<?php

/*

type: layout

name: Footers 12

position: 12

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
         field="layout-footer-skin-12-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
        <div class="row text-md-start text-center">
            <div class="col-md-5 col">
                <div class="pb-7">
                    <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
                </div>
                <p class=""><?php _lang('Photographs are a way of preserving a moment in our lives for the rest of our lives.', 'templates/big'); ?></p>
                <p class=""><?php _lang('Microweber, the premier free open-source blogging utility, has gone through several upgrades in its life. Today it’s one of the most popular blogging tools on the Internet', 'templates/big'); ?></p>
            </div>

            <div class="col-md-4 col ps-md-6">
               <p class="font-weight-bold"><?php _lang('Contacts', 'templates/big'); ?>
                <div class="d-flex"> <p><?php _lang('P', 'templates/big'); ?>: </p><p class="mx-6">123-456-7890</p></div>
                <div class="d-flex"> <p><?php _lang('E', 'templates/big'); ?>: </p><a class="mx-6">mail@yourcompany.com</a></div>
                <div class="d-flex"> <p><?php _lang('A', 'templates/big'); ?>: </p><p class="mx-6">Sofia, Bulgaria Boulevard 39, Bulgaria</p></div>
            </div>

            <div class="col-md-3 col ps-md-7">
                <p class="font-weight-bold"><?php _lang('Socials', 'templates/big'); ?></p>
                <module type="social_links"/>
                <small><?php _lang('Microweber, the premier free open-source blogging utility, has gone through several upgrades in its life', 'templates/big'); ?>.</small>
            </div>
        </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>


<section class="pt-lg-7 p-4" style="background-color: #f5f5f5;">
    <div class="container d-md-flex align-items-center px-md-0">
        <div class="col-12 d-md-flex text-center">
            <p class="col-sm-6 mb-md-0 mt-1 text-md-start text-center noedit"><?php print powered_by_link(); ?></p>
            <div class="col-sm-6 d-md-flex justify-content-md-end edit" field="footer-menu-skin-12-<?php print $params['id'] ?>" rel="module"">
                <module type="menu" class="footer-skin-link" template="simple" name="footer_menu_6"/>
            </div>
        </div>
    </div>
</section>
