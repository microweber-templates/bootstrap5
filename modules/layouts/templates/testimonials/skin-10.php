<?php

/*

type: layout

name: Testimonial 10

position: 10

categories: Testimonials

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-10-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class=" ">Testimonials</h6>
                <br /><br /><br />
            </div>
        </div>

        <div class="allow-drop"></div>

        <module type="testimonials" template="skin-5" project_name="Testimonials 10"/>
    </div>
</section>
