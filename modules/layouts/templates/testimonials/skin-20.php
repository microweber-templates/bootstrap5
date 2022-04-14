<?php

/*

type: layout

name: Testimonial 20

position: 20

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-20-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="testimonials" template="skin-8" project_name="Testimonials 20"/>
    </div>
</section>
