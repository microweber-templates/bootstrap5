<?php

/*

type: layout

name: Call to action 8

position: 8

categories: Call to Action


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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-8-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-10 col-lg-5 allow-drop text-center text-lg-start">
                <h3>Space The Final Frontier</h3>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 allow-drop d-flex align-items-center justify-content-lg-end justify-content-center mt-2 mt-sm-0 mx-auto">
                <module type="btn" button_style="btn-outline-primary   px-5" text="Button" class="ms-3"/>
                <module type="btn" button_style="btn-primary   px-5" text="Button" class="ms-3"/>
            </div>
        </div>
    </div>
</section>
