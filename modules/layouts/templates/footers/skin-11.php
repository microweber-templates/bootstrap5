<?php

/*

type: layout

name: Footers 11

position: 11

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
         field="layout-footer-skin-11-<?php print $params['id'] ?>" rel="module">
    <!-- Footer -->
    <div class="container">
       <div class="row">
           <div class="col-md-8 row d-md-flex text-md-start text-center">
               <div class="col-md-3 col">
                   <p class="font-weight-bold ms-3 "><?php _lang('Category', 'templates/big'); ?> </p>
                   <module type="menu" template="simple" name="footer_menu_1"/>
               </div>

               <div class="col-md-3 col">
                   <p class="font-weight-bold ms-3 "><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_2"/>
               </div>

               <div class="col-md-3 col">
                   <p class="font-weight-bold ms-3 "><?php _lang('Category', 'templates/big'); ?></p>
                   <module type="menu" template="simple" name="footer_menu_3"/>
               </div>
           </div>
           <div class="col-md-4 col text-md-end text-center">
                <module type="social_links"/>
           </div>
       </div>
    </div>
    <?php include('footer_cart.php'); ?>
</section>


<section class="pt-lg-7 p-4" style="background-color: #f5f5f5;">
    <div class="container d-md-flex align-items-center px-md-0">
        <div class="col-12 d-md-flex text-center">
            <p class="col-sm-6 mb-md-0 mt-1 text-md-start text-center noedit"><?php print powered_by_link(); ?></p>
            <div class="col-sm-6 d-md-flex justify-content-md-end edit" field="footer-menu-skin-11-<?php print $params['id'] ?>" rel="module""><module type="menu" class=footer_skin" template="simple" name="footer_menu_6"/></div>
        </div>
    </div>
</section>
