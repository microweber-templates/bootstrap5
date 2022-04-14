<?php

/*

type: layout

name: Contacts 4

position: 4

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
    @media screen and (min-width: 575px) {
    <?php echo '#' . $params['id'] . ' '; ?> .bg-body {
        max-width: 70% !important;
    }
    }

    @media screen and (min-width: 768px) {
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps,
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps .relative {
        height: 100% !important;
    }

    <?php echo '#' . $params['id'] . ' '; ?> .bg-body {
                                                 max-width: 50% !important;
                                             }
    }
</style>

<?php

/*

type: layout

name: Contacts 3

position: 3

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
                    <div class="mx-auto my-3 col-sm-10 col-md-6 col-lg-6">
                        <h3 class="mb-4">Contact Us</h3>
                        <p class="mb-4">When you enter into any new area of science, you almost always find yourself with a baffling.</p>
                        <module type="contact_form" template="skin-3"/>
                    </div>

                    <div class="mx-auto my-3 col-sm-10 col-md-6 col-lg-6 overflow-hidden">

                        <div class="d-flex flex-column h-100">
                            <module type="google_maps" class="mb-3 w-100"/>

                            <div class="  w-100">
                                <div class="row">
                                    <div class="col-md-12 col-md-12 cloneable">
                                        <div class="d-block d-md-flex align-items-start h-100 px-3">
                                            <div class="me-md-4 mb-3 mb-md-0 mx-auto mx-md-0 w-40 maxw-40 icon-size-24px">
                                                <div class="square d-flex align-items-center justify-content-center">
                                                    <i class="mdi mdi-map-marker   position-absolute safe-element"></i>
                                                </div>
                                            </div>

                                            <div class="allow-drop">
                                                <h6 class=" ">Address</h6>
                                                <p>6100 Your address here <br/>Palo Alto, CA</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 cloneable">
                                        <div class="d-block d-md-flex align-items-start h-100 px-3">
                                            <div class="me-md-4 mb-3 mb-md-0 mx-auto mx-md-0 w-40 maxw-40 icon-size-24px">
                                                <div class="square d-flex align-items-center justify-content-center">
                                                    <i class="mdi mdi-email   position-absolute safe-element"></i>
                                                </div>
                                            </div>

                                            <div class="allow-drop">
                                                <h6 class=" ">Email</h6>
                                                <p><a href="#">info@company.com</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 cloneable">
                                        <div class="d-block d-md-flex align-items-start h-100 px-3">
                                            <div class="me-md-4 mb-3 mb-md-0 mx-auto mx-md-0 w-40 maxw-40 icon-size-24px">
                                                <div class="square d-flex align-items-center justify-content-center">
                                                    <i class="mdi mdi-phone   position-absolute safe-element"></i>
                                                </div>
                                            </div>

                                            <div class="allow-drop">
                                                <h6 class=" ">Phone</h6>
                                                <p>001 234 567 890</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
