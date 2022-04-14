<?php

/*

type: layout

name: Testimonial 3

position: 3

categories: Testimonials

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h5 class=" ">Pictures In The Sky</h5>
                <p>The $79 iWork ’08 appears to be a good deal for anyone needing an affordable office suite for the Mac. Apple has finally added a spreadsheet application. At first glance, Numbers is an elegant no-brainer for anyone migrating from Microsoft Excel. </p>
                <br /><br /><br />
            </div>
        </div>

        <div class="allow-drop"></div>

        <module type="testimonials" template="skin-10" project_name="Testimonials 3"/>
    </div>
</section>
