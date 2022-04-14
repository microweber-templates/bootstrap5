<?php

/*

type: layout

name: Testimonial 13

position: 13

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

<section class="section    <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-8 col-lg-6 mx-auto allow-drop">
                <h6 class=" ">Asteroids</h6>
                <p>Stu Unger is one of the biggest superstars to have immerged from the professional poker world. </p>
                <br /><br /><br />
            </div>
        </div>

        <div class="allow-drop"></div>

        <module type="testimonials" template="skin-12" project_name="Testimonials 13"/>
    </div>
</section>
