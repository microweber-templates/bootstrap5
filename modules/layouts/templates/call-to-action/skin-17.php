<?php

/*

type: layout

name: Call to action 17

position: 17

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

<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-17-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-lg-7 mx-auto text-center allow-drop">
                <h1>Sign Up</h1>
                <p class="lead-2">Planning to visit Las Vegas or any other vacational resort where casinos Planning to visit Las Vegas or any other vacational resort where casinos </p>
            </div>
        </div>

        <div class="allow-drop"><br/><br/></div>

        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 col-lg-4 mx-auto allow-drop">
                <module type="contact_form" template="skin-2" />
            </div>
        </div>
    </div>
</section>
