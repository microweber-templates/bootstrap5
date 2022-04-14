<?php

/*

type: layout

name: Contacts 13

position: 13

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

<section class="section <?php print $layout_classes; ?> form-control-outline-dark edit safe-mode" field="layout-contacts-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">

            <h3 class="text-center mb-5">Our contacts</h3>

            <div class="col-md-6 mx-auto mt-5">
                    <p class="lead">Phone: +1-123-456-78</p>
                    <p class="lead">Email:  <a href="mailto:info@company.com">info@company.com</a></p>
                <br/>
                <br/>
                <br/>


                <p class="lead">Add your company address here</p>
                <module type="social_links" template="skin-1" />
            </div>

            <div class="col-md-6 mx-auto">
                <module type="contact_form" template="skin-5"/>
            </div>
        </div>
    </div>
</section>
