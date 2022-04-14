<?php

/*

type: layout

name: Content 44

position: 44

categories: Content

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-44-<?php print $params['id'] ?>" rel="module">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-4 pe-lg-7 mb-6 allow-drop">
                <h1>Pictures In The Sky</h1>
                <div class="border-end border-color-primary border-width-4 position-absolute h-100 right-0 top-0 d-none d-md-block nodrop"></div>
            </div>

            <div class="col-md-8 ps-lg-9 mb-6 allow-drop">
                <p class="lead-2">With so many different ways today to find information online, it can sometimes be hard to know where to go to first. I want to look at the major and most effective ways to find information online.</p>
                <p>With so many different ways today to find information online, it can sometimes be hard to know where to go to first. I want to look at the major and most effective ways to find information online. The biggest and most commonly used method</p>
                <module type="btn" button_style="btn-link" button_size=" " text="Learn More"/>
            </div>
        </div>
    </div>
</section>
