<?php

/*

type: layout

name: Call to action 22

position: 22

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

<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-22-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 col-lg-6 mx-auto text-center allow-drop">
                <h1>Make a reservation</h1>
                <p class="lead-2">Please full the form below to make an on-line reservation</p>

                <module type="contact_form" template="skin-1" />
            </div>
        </div>
    </div>
</section>
