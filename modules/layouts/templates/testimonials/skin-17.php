<?php

/*

type: layout

name: Testimonial 17

position: 17

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-17-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="testimonials" template="skin-6" project_name="Testimonials 17"/>
    </div>
</section>
