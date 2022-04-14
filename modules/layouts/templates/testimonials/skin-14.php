<?php

/*

type: layout

name: Testimonial 14

position: 14

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-14-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h1>Testimonials</h1>
                <br /><br /><br />
            </div>
        </div>

        <div class="allow-drop"></div>

        <module type="testimonials" template="skin-3" project_name="Testimonials 14"/>
    </div>
</section>
