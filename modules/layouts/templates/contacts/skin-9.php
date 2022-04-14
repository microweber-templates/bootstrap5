<?php

/*

type: layout

name: Contacts 9

position: 9

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

<section class="section <?php print $layout_classes; ?> form-control-outline-dark edit safe-mode  " field="layout-contacts-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center text-lg-center">
            <div class="col-12 col-lg-8 col-lg-6 mx-auto allow-drop">
                <h3 class="mb-4">Feedback</h3>
                <p>There is something about parenthood that gives us a sense of history and a deeply rooted desire to send on into the next generation the great.</p>
                <br/>
            </div>

            <div class="col-12 col-lg-9 col-lg-7 mx-auto allow-drop">
                <module type="contact_form" template="skin-5"/>
            </div>

            <div class="col-12 col-lg-8 col-lg-6 mx-auto allow-drop mt-2">
                <a href="mailto:info@company.com">info@company.com</a>
                <br/>
                <br/>
                <p class="mb-0">6100 Your address here <br/>Palo Alto, CA</p>
                <module type="social_links" template="skin-5" />
            </div>
        </div>
    </div>
</section>
