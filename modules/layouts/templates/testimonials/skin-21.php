<?php

/*

type: layout

name: Testimonials

position: 21

categories: Testimonials


*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-80';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-80';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div data-parallax="" data-overlay="5" data-overlay-black="" class="edit safe-mode nodrop" field="layout-skin-21-<?php print $params['id'] ?>" rel="module">
    <section class="testimonials-21 d-flex background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/salmon_and_mashrooms.jpg');">
        <div class="container align-self-center <?php print $layout_classes; ?> allow-drop">
            <module type="testimonials" template="skin-15" project_name="Testimonials 21"/>
        </div>
    </section>
</div>

