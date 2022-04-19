<?php

/*

type: layout

name: Footers 18

position: 18

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
         field="layout-footer-skin-18-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
       <div class="row">
           <div class="row col-md-12 d-md-flex col-md-8 row d-flex text-md-start text-center ">
               <div class="col-md-2 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?> </p>
                   <module type="menu" template="simple" name="footer_menu_1"/>
               </div>

               <div class="col-md-2 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_2"/>
               </div>

               <div class="col-md-2 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_3"/>
               </div>

               <div class="col-md-2 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_4"/>
               </div>

               <div class="col-md-2 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_4"/>
               </div>

               <div class="col-md-2 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_4"/>
               </div>
           </div>
       </div>
    </div>
    <hr>
    <div class="container px-0 pt-7">
        <div class="col-12 row">
            <div class="col-md-7 col-12">
                <module type="contact_form" template="subscribe-6"/>
            </div>
            <div class="col-md-5 col-12 text-md-end text-center">
                <module type="social_links"/>
            </div>
        </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-18-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>

