<?php

/*

type: layout

name: Call to action 1

position: 1

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-10 col-lg-6 allow-drop text-center text-lg-start mx-auto">
                <h3>Start your free trial now, with a simple registration. </h3>
                <p>No credit cart required.</p>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 allow-drop d-flex align-items-center justify-content-lg-end justify-content-center mt-2 mt-sm-0 mx-auto">
                <module type="btn" button_style="btn-outline-primary" text="Log In" class="mx-2"/>
                <module type="btn" button_style="btn-primary" text="Register Now" class="mx-2"/>
            </div>
        </div>
    </div>
</section>
