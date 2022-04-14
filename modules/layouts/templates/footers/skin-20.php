<?php

/*

type: layout

name: Footers 20

position: 20

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
         field="layout-footer-skin-20-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
       <div class="row">
           <div class="container px-0 pb-5">
               <div class="col-12 row justify-content-md-center mb-md-4">
                   <div class="col-sm-6 col-12 text-md-start text-center">
                       <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
                   </div>

                   <div class="col-sm-6 col-12 align-self-center">
                       <module type="contact_form" template="subscribe-6"/>
                   </div>
               </div>
           </div>
           <div class="row col-md-12 d-md-flex col-md-4 row d-flex text-md-start text-center ps-md-0">
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
    <div class="   text-md-start text-center">
       <div class="container d-md-flex align-items-md-center px-md-0 mt-lg-4 p-4">
           <div class="col-md-4 col">
               <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>

           </div>
           <div class="col-md-4 col">
               <module type="menu" class="footer_skin" template="simple" name="footer_menu_6"/>
           </div>
           <div class="col-md-4 col text-md-end">
               <module type="social_links"/>
           </div>
       </div>
    </div>

    <?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-20-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
