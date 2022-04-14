<?php

/*

type: layout

name: Contacts 12

position: 12

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


<section class="section <?php print $layout_classes; ?> edit safe-mode" field="layout-contacts-skin-12-<?php print $params['id'] ?>" rel="module" data-background-position="center center" data-bg-contain="true">

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="cloneable mb-5">
                <p class="lead font-weight-bold">FEEL FREE TO CONTACT US</p>
            </div>

            <div class="mx-auto mb-5 cloneable">
                    <h6>001 234 567 890</h6>
                    <h6><a href="mailto:info@company.com">info@company.com</a></h6>
            </div>

            <div class="mx-auto mb-5 cloneable">
                <p>Follow us on social media</p>
                <module type="social_links" template="skin-1"/>
            </div>
        </div>
    </div>
</section>
