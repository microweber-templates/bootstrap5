<?php

/*

type: layout

name: Contacts 10

position: 10

categories: Contact Us

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>
    @media screen and (max-width: 767px) {
    <?php echo '#' . $params['id'] . ' '; ?> .info-card-holder {
        height: unset !important;
    }
    }
</style>

<section class="section <?php print $layout_classes; ?> form-control-outline-dark edit safe-mode  " field="layout-contacts-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <module type="google_maps" class="w-100 h-350"/>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="bg-body   mt-5 mb-4 w-100">
                                    <div class="row">
                                        <div class="col-4 allow-drop">
                                            <div class="cloneable   mb-4">
                                                <h6 class=" ">Address</h6>
                                                <p>Sofia. Bulgaria <br/>Your address here</p>
                                            </div>

                                            <module type="social_links" template="skin-1"/>
                                        </div>

                                        <div class="col-4 allow-drop d-flex justify-content-center">
                                            <div class="cloneable   mb-4">
                                                <h6 class=" ">Email</h6>
                                                <p><a href="#">info@company.com</a></p>
                                            </div>
                                        </div>

                                        <div class="col-4 allow-drop d-flex justify-content-end">
                                            <div class="cloneable   mb-4">
                                                <h6 class=" ">phone</h6>
                                                <p>+1 234 567 890</p>
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

    <div class="container py-5">
        <div class="row text-center text-lg-start">
            <div class="col-12 col-lg-9 col-lg-8 mx-auto allow-drop">
                <h3 class="mb-4">Feedback</h3>
                <p>When you enter into any new area of science you almost always find yourself.</p>

                <module type="contact_form" template="skin-5"/>
            </div>
        </div>
    </div>
</section>
