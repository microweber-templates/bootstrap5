<?php

/*

type: layout

name: Contacts 11

position: 11

categories: Contact Us

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-7';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-7';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> edit safe-mode  " field="layout-contacts-skin-11-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-bg-contain="true">

    <div class="container">
        <div class="row text-center text-md-start">
            <div class="mx-auto col-sm-10 col-md-5 mb-5 cloneable allow-drop">
                <p class="lead-2">If you have any questions or recommendations, you can contact us from the information provided</p>
            </div>

            <div class="mx-auto col-sm-8 col-md-4 mb-5 cloneable allow-drop">
                <div class="row d-flex justify-content-center justify-content-lg-between  ">
                    <div class="col-md-12 col-md-12 mb-4 cloneable">
                        <div class="d-block d-md-flex align-items-start h-100 px-3">
                            <div class="me-md-4 mb-3 mb-md-0 mx-auto mx-md-0 w-40 maxw-40 icon-size-24px">
                                <div class="square d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-map-marker   position-absolute safe-element"></i>
                                </div>
                            </div>

                            <div class="allow-drop">
                                <small class="  font-weight-bold">Address</small>
                                <p>6100 Your address here <br/>Palo Alto, CA</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-md-12 mb-4 cloneable">
                        <div class="d-block d-md-flex align-items-start h-100 px-3">
                            <div class="me-md-4 mb-3 mb-md-0 mx-auto mx-md-0 w-40 maxw-40 icon-size-24px">
                                <div class="square d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-email   position-absolute safe-element"></i>
                                </div>
                            </div>

                            <div class="allow-drop">
                                <small class="  font-weight-bold">Email</small>
                                <p><a href="#">info@company.com</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-md-12 mb-4 cloneable">
                        <div class="d-block d-md-flex align-items-start h-100 px-3">
                            <div class="me-md-4 mb-3 mb-md-0 mx-auto mx-md-0 w-40 maxw-40 icon-size-24px">
                                <div class="square d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-phone   position-absolute safe-element"></i>
                                </div>
                            </div>

                            <div class="allow-drop">
                                <small class="  font-weight-bold">Phone</small>
                                <p>001 234 567 890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-8 col-md-3 mb-5 cloneable allow-drop">
                <small class="  font-weight-bold">Socials</small>
                <module type="social_links" template="skin-1"/>
            </div>
        </div>
    </div>
</section>
