<?php

/*

type: layout

name: Content 58

position: 58

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-58-<?php print $params['id'] ?>" rel="module">
    <div class="container d-flex justify-content-center align-items-center">

        <div class="border border-color-primary  pt-7 pb-0 px-5">
            <div class="row">
                <div class="col-md-6 pe-md-7 mb-6 allow-drop">
                    <h1>Space The Final Frontier</h1>
                </div>

                <div class="col-md-6 mb-6 allow-drop">
                    <p class="lead">The lights of the city do a good job of disguising the amazing display that is above all of our heads all of the time.</p>
                    <module type="btn" button_style="btn-link" button_size=" " text="Learn More"/>
                </div>
            </div>
        </div>
    </div>
</section>
