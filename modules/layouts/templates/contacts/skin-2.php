<?php

/*

type: layout

name: Contacts 2

position: 2

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


<section class="section edit safe-mode  " field="layout-contacts-skin-2-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-bg-contain="true">
    <div class="container background-image-holder <?php print $layout_classes; ?>" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/contacts-2.png')">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h3>Contact us for more information, support and more good deals. We'll be happy to help.</h3>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row text-center mt-7">
            <div class="col-sm-6 col-md-4 mb-5 cloneable">
                <div class="text-center mt-6 allow-drop">
                    <p class="lead font-weight-bold">Address</p>
                    <p class="lead">USA, 6100 Hackett Plain Suite 705 <br/>Palo Alto, CA<br/><br/></p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 mb-5 cloneable">
                <div class="text-center mt-6 allow-drop">
                    <p class="lead font-weight-bold">Emails</p>
                    <p class="lead">support@company.com<br/>sales.team@company.com<br/><br/></p>

                </div>
            </div>

            <div class="col-sm-6 col-md-4 mb-5 cloneable">
                <div class="text-center mt-6 allow-drop">
                    <p class="lead font-weight-bold">Phones</p>
                    <p class="lead">+1 234 546 879 (support)<br/> +2 345 678 910 (sales)<br/><br/></p>

                </div>
            </div>
        </div>
    </div>
</section>
