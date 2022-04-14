<?php

/*

type: layout

name: Contacts 3

position: 3

categories: Contact Us

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

<style>
    @media screen and (min-width: 768px) {
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps,
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps .relative {
        height: 100% !important;
    }
    }
</style>

<section class="section <?php print $layout_classes; ?> form-control-outline-dark edit safe-mode  " field="layout-contacts-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center text-lg-start">
            <div class="col-12 col-lg-12 col-lg-12 mx-auto">
                <div class="row">
                    <div class="mx-auto my-3 col-sm-10 col-md-6 col-lg-7 overflow-hidden">

                       <div class="d-flex flex-column h-100">
                           <div class="  w-100">
                               <div class="row">
                                   <div class="col-6 allow-drop">
                                       <div class="cloneable   mb-4">
                                           <h6>Address</h6>
                                           <p>Sofia. Bulgaria <br/>Your address here</p>
                                       </div>

                                       <module type="social_links" template="skin-1"/>
                                   </div>

                                   <div class="col-6 allow-drop">
                                       <div class="cloneable   mb-4">
                                           <h6>Email</h6>
                                           <p><a href="#">info@company.com</a></p>
                                       </div>

                                       <div class="cloneable   mb-4">
                                           <h6>phone</h6>
                                           <p>+1 234 567 890</p>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <module type="google_maps" class="pt-5 mb-3 w-100"/>
                       </div>
                    </div>

                    <div class="mx-auto my-3 col-sm-10 col-md-6 col-lg-5">
                        <div class="ps-lg-5">
                            <h3 class="mb-4">Contact Us</h3>
                            <p class="mb-4">When you enter into any new area of science, you almost always find yourself with a baffling.</p>
                            <module type="contact_form" template="skin-3"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
