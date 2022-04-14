<?php

/*

type: layout

name: Contacts 5

position: 5

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


<section class="section <?php print $layout_classes; ?> edit safe-mode  " field="layout-contacts-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 mx-auto">
                <div class="row text-center">
                    <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable">
                        <div class="w-40 mx-auto icon-size-40px">
                            <div class="square d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-google-maps position-absolute safe-element"></i>
                            </div>
                        </div>

                        <div class="text-center mt-6 allow-drop">
                            <p>6100 Hackett Plain Suite 705 <br/>Palo Alto, CA</p>
                        </div>
                    </div>

                    <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable">
                        <div class="w-40 mx-auto icon-size-40px">
                            <div class="square d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-email position-absolute safe-element"></i>
                            </div>
                        </div>

                        <div class="text-center mt-6 allow-drop">
                            <p><a href="#">info@company.com</a></p>
                        </div>
                    </div>

                    <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable">
                        <div class="w-40 mx-auto icon-size-40px">
                            <div class="square d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-cellphone position-absolute safe-element"></i>
                            </div>
                        </div>

                        <div class="text-center mt-6 allow-drop">
                            <p>+1 234 567 890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto">
                <div class="allow-drop text-center">
                    <br />
                    <br />
                    <br />
                    <p class="lead">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own </p>
                    <br/><br/>
                    <module type="social_links" template="skin-6"/>
                    <br/><br/>
                </div>
            </div>
        </div>
    </div>
</section>
