<?php

/*

type: layout

name: Footers 3

position: 3

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
         field="layout-footer-skin-3-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container text-md-start text-center">
       <div class="row">
           <div class="col-md-4 col pe-md-9">
               <div class="pb-7">
                   <module type="logo" id="footer-logo-<?php print $params['id']; ?>"/>
               </div>
               <p><?php _e("While most people enjoy casino gambling, sports betting, lottery and bingo playing."); ?></p>
               <p><?php _e("111-222-3334"); ?></p>
               <p><?php _e("111-222-3334"); ?></p>
               <module type="btn" text="Button" button_style="btn-link"/>
           </div>

           <div class="row col-md-8 row d-lg-flex mt-md-0 mt-5 justify-content-lg-end">
               <div class="col-md-3 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?> </p>
                   <module type="menu" template="simple" name="footer_menu_1"/>
               </div>

               <div class="col-md-3 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_2"/>
               </div>

               <div class="col-md-3 col">
                   <p class="font-weight-bold ms-3"><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_3"/>
               </div>
           </div>
       </div>
        <div class="column justify-content-center pt-4">
            <module type="social_links"/>
        </div>
    </div>
<?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-3-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
