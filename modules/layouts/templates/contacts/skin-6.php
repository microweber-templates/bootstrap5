<?php

/*

type: layout

name: Contacts 6

position: 6

categories: Contact Us

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>
    @media screen and (min-width: 575px) {
    <?php echo '#' . $params['id'] . ' '; ?> .bg-body {
        max-width: 100% !important;
    }
    }

    @media screen and (min-width: 768px) {
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps,
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps .relative {
        height: 100% !important;
    }
    }

    @media screen and (min-width: 992px) {
    <?php echo '#' . $params['id'] . ' '; ?> .bg-body {
        max-width: 70% !important;
    }
    }
</style>

<section class="section form-control-outline-dark edit safe-mode  " field="layout-contacts-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid position-relative <?php print $layout_classes; ?>">
        <div class="row position-md-absolute w-100 h-100 left-0 right-0 top-0 ms-0">
            <div class="col-md-6">
                <module type="google_maps" class="w-100"/>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-lg-4 bg-white  position-relative ms-auto px-3 py-5 my-3  ">
                    <div class="row py-4 text-center text-md-start d-flex justify-content-center justify-content-lg-between  ">
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

                        <div class="col-md-12 col-md-12 cloneable">
                            <div class="d-block d-md-flex align-items-start h-100 px-3">
                                <div class="me-md-4 mb-3 mb-md-0 mx-auto mx-md-0 w-40 maxw-40 icon-size-24px">
                                    <div class="square d-flex align-items-center justify-content-center">

                                    </div>
                                </div>

                                <div class="allow-drop">
                                    <small class="  font-weight-bold">Social Networks</small>
                                    <module type="social_links" template="skin-6"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ms-auto my-3 col-sm-10 col-md-6 col-lg-6 position-relative">
                    <div class="px-md-5 px-lg-7 px-lg-9">
                        <h3 class="mb-4">Feedback</h3>
                        <p class="mb-4">When you enter into any new area of science you almost always find yourself.</p>
                        <module type="contact_form" template="skin-3"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
