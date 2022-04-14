<?php

/*

type: layout

name: Contacts 8

position: 8

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


<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode  " field="layout-contacts-skin-8-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-bg-contain="true">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <div class="row  ">
                    <div class="mx-auto col-sm-10 col-md-6 cloneable allow-drop">
                        <h3>Contact Us</h3>
                        <p class="mb-3">Your description</p>
                        <module type="contact_form" template="skin-3"/>
                    </div>

                    <div class="mx-auto col-sm-10 col-md-6 ps-md-7 mt-7 mb-5 cloneable allow-drop">
                        <div class="row text-center text-md-start d-flex justify-content-center justify-content-lg-between   mt-4">
                            <div class="col-6 col-md-12 mb-4 cloneable">
                                <div class="allow-drop">
                                    <h6>Email</h6>
                                    <p><a href="#">info@company.com</a></p>
                                </div>
                            </div>

                            <div class="col-6 col-md-12 mb-4 cloneable">
                                <div class="allow-drop">
                                    <h6>Phone</h6>
                                    <p>001 234 567 890</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-12 mb-4 cloneable">
                                <div class="allow-drop">
                                    <h6>Address</h6>
                                    <p>6100 Your address here <br/>Palo Alto, CA</p>
                                </div>
                            </div>

                            <div class="col-6 col-md-12 mb-4 cloneable">
                                <div class="allow-drop">
                                    <h6>Social Networks</h6>
                                    <module type="social_links" template="skin-6"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
