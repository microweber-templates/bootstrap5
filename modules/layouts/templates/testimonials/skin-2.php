<?php

/*

type: layout

name: Testimonial 2

position: 2

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <module type="testimonials" template="skin-11" project_name="Testimonials 3"/>
    </div>
</section>
