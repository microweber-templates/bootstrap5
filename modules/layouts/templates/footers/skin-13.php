<?php

/*

type: layout

name: Footers 13

position: 13

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
         field="layout-footer-skin-13-<?php print $params['id'] ?>" rel="module">
<!-- Footer -->
    <div class="container text-md-start text-center">
       <div class="row">
           <div class="col-md-5 col-sm-12 col-xs-12">
               <div class="pb-7">
                   <module type="logo" id="footer-logo-<?php print $params['id']; ?>" />
               </div>
               <div class="text-md-start text-center pt-md-3">
                   <p class="mb-md-1"><?php _lang('Our partners', 'templates/big'); ?></p>
                   <img class="me-md-1" src="<?php print template_url(); ?>assets/img/layouts/footers-star.png" >
                   <img class="me-md-1" src="<?php print template_url(); ?>assets/img/layouts/footers-star.png" >
                   <img class="me-md-1" src="<?php print template_url(); ?>assets/img/layouts/footers-star.png" >
                   <img class="me-md-1" src="<?php print template_url(); ?>assets/img/layouts/footers-star.png" >
                   <img class="me-md-1" src="<?php print template_url(); ?>assets/img/layouts/footers-star.png" >
               </div>
           </div>

           <div class="row col-md-7 col d-lg-flex mt-md-0 mt-5">
               <p class="col-12 font-weight-bold lead ms-3"><?php _lang('Categories', 'templates/big'); ?></p>
               <div class="col-md-3 col">
                   <p class="ms-3"><?php _lang('Computers', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_1"/>
               </div>

               <div class="col-md-3 col">
                   <p class="ms-3"><?php _lang('Computers', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_2"/>
               </div>

               <div class="col-md-3 col">
                   <p class="ms-3"><?php _lang('Computers', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_3"/>
               </div>

               <div class="col-md-3 col">
                   <p class="ms-3"><?php _lang('Computers', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_4"/>
               </div>
           </div>
       </div>
    </div>

    <div class="   mt-lg-7">
       <div class="container d-md-flex align-items-center text-md-start text-center px-md-0 p-2">
          <div class="col-md-8 col d-md-flex align-items-center">
              <module type="social_links"/>
              <module type="menu" class="footer_skin" template="simple" name="footer_menu_8"/>
          </div>
           <div class="col-md-4 d-flex justify-content-md-end justify-content-center"><module class="footer_skin" type="menu" template="simple" name="footer_menu_9"/></div>
       </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>

<section class="py-2" style="background-color: #f5f5f5;">
    <div class="container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center edit" field="footer-reserved-skin-13-<?php print $params['id'] ?>" rel="module">© All Rights Reserved. Your Website Design</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</section>
