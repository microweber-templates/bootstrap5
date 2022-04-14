<?php

/*

type: layout

name: Call to action 13

position: 13

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 col-lg-6 mx-auto text-center allow-drop">
                <h4 class="mb-3">Cleaning And Organizing Your Computer</h4>
                <p class="lead mb-5">Online education is approachable in many ways, but students often neglect </p>
                <module type="btn" button_style="btn-primary" button_size="btn-lg px-5" text="Call to action"/>
            </div>
        </div>
    </div>
</section>
