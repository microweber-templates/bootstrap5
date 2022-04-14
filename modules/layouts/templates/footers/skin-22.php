<?php

/*

type: layout

name: Footers 22

position: 22

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
         field="layout-footer-skin-22-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 row d-flex text-md-start text-center">
                <div class="row col">
                    <div class="col-md-3 col">
                        <p class="font-weight-bold ms-3 "><?php _lang('Category', 'templates/big'); ?></p>
                        <module type="menu" template="simple" name="footer_menu_3"/>
                    </div>

                    <div class="col-md-3 col">
                        <p class="font-weight-bold ms-3 "><?php _lang('Category', 'templates/big'); ?></p>
                        <module type="menu" template="simple" name="footer_menu_4"/>
                    </div>

                    <div class="col-md-3 col">
                        <p class="font-weight-bold ms-3 "><?php _lang('Category', 'templates/big'); ?></p>
                        <module type="menu" template="simple" name="footer_menu_4"/>
                    </div>

                    <div class="col-md-3 col">
                       <div class="row d-block">
                           <p class="font-weight-bold ms-3 "><?php _lang('Apps', 'templates/big'); ?></p>
                           <img class="  my-1 mx-1" src="<?php print template_url(); ?>assets/img/layouts/GooglePlay.png" >
                           <img class="  my-1 mx-1" src="<?php print template_url(); ?>assets/img/layouts/Appstore.png" >
                       </div>

                        <div class="row d-block">
                           <p class="font-weight-bold ms-sm-4  mt-3 mb-0"><?php _lang('Socials', 'templates/big'); ?></p>
                           <module type="social_links"/>
                       </div>
                    </div>

                    <hr class="w-100 m-0 d-md-block d-none">

                    <div class="mb-md-0 mb-3 mt-3 d-md-flex text-start text-left">
                        <div class="mx-1">
                            <img class="px-2" src="<?php print template_url(); ?>assets/img/layouts/Email.png"<span class="align-self-center mb-0 mx-1"><?php _lang('111-222-3334', 'templates/big'); ?></span>
                        </div>
                        <div class="mx-1">
                            <img class="px-2" src="<?php print template_url(); ?>assets/img/layouts/Phone.png"<span class="align-self-center mb-0 mx-1"><a href=""><?php _lang('mail@yourcompany.com', 'templates/big'); ?></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>


<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-22-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
