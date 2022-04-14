<?php

/*

type: layout

name: Call to action 19

position: 19

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

<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-19-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center allow-drop">
                <h3>The Amazing Hubble</h3>
                <p>Have you ever finally just gave in to the temptation and read your horoscope in the newspaper on Sunday morning? Sure, we all have.</p>
            </div>
        </div>

        <div class="allow-drop"><br /></div>

        <div class="row">
            <div class="col-12 mx-auto text-center allow-drop">
                <module type="contact_form" template="subscribe-4"/>
            </div>
        </div>
    </div>
</section>
