<?php

/*

type: layout

name: Footers 1

position: 1

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


<section class="footer-background <?php print $layout_classes; ?> edit safe-mode  "
         field="layout-footer-skin-1-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
<div class="container text-md-start text-center">
   <div class="row">
       <div class="col-md-2 col me-4">
           <div class="pb-7">
               <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
           </div>

           <p class="font-weight-bold"><?php _e("The Amazing Hubble"); ?></p>
           <small><?php _e("But for many of us, it was that first time we saw a rain of fire from."); ?></small>
       </div>
       <div class="row col-md-10 row px-md-10">
           <div class="col">
               <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?> </p>
               <module type="menu" template="simple" class="pb-lg-4" name="footer_menu_1"/>
           </div>

           <div class="col">
               <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
               <module type="menu" template="simple" name="footer_menu_2"/>
           </div>

           <div class="col">
               <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
               <module type="menu" template="simple" name="footer_menu_3"/>
           </div>
       </div>
   </div>
</div>

<div class="d-md-flex justify-content-center align-items-center text-md-start text-center">
    <module type="social_links"/>
</div>

<?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-1-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
