<?php

/*

type: layout

name: Contacts 7

position: 7

categories: Contact Us

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-9';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-9';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section form-control-outline-dark edit safe-mode  " field="layout-contacts-skin-7-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-bg-contain="true">
    <div class="container <?php print $layout_classes; ?>">
        <div class="row text-center text-lg-start">
            <div class="col-12 col-lg-10 col-lg-10 mx-auto">
                <div class="row">
                    <div class="mx-auto my-3 col-sm-10 col-md-6 col-lg-5">
                        <div class="bg-body   px-5 py-5 h-100">
                            <h4 class="mb-7">Company details</h4>

                            <div class="cloneable   mb-7">
                                <h6 class=" ">Phone</h6>
                                <p>+1 234 567 890</p>
                            </div>

                            <div class="cloneable   mb-7">
                                <h6 class=" ">Address</h6>
                                <p>USA 6100 Hackett Plain Suite 705 <br />Palo Alto, CA</p>
                            </div>

                            <div class="cloneable   mb-7">
                                <h6 class=" ">Email</h6>
                                <p><a href="#">info@company.com</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="mx-auto my-3 col-sm-10 col-md-6 col-lg-7">
                        <div class="bg-body   px-5 py-5 h-100">
                            <h4 class="mb-4">Contact us email form</h4>
                            <module type="contact_form" template="skin-4"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
