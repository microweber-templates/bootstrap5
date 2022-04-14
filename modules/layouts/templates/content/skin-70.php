<?php

/*

/*

type: layout

name: Content 70

position: 70

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<div data-parallax="" data-overlay="5" data-overlay-black="" class="edit safe-mode nodrop" field="layout-skin-70-<?php print $params['id'] ?>" rel="module">
    <section class="section digital-parallax-content  mw-layout-overlay-wrapper background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/sample.jpg'); padding: 240px 0;">
        <div class="mw-layout-overlay"></div>
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?> allow-drop">

            <h2 class="fx-deactivate">- 20% for the first repair</h2>
            <p class="fx-deactivate">Leave application now and get -20% discount <br />for your first repair</p>
            <br/><br/><br/>

            <module type="btn"  button_text="Get a Discount" class=" fx-particles-1 allow-drop"/>
        </div>
    </section>
</div>
