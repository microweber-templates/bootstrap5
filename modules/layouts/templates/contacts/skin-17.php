<?php

/*

type: layout

name: Contacts 17

position: 17

categories: Contact Us

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-90';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<div data-parallax="" data-overlay="0.5" data-overlay-black="" class="edit safe-mode nodrop" field="layout-skin-17-<?php print $params['id'] ?>" rel="module">
    <section class="contacts-guesthouse mw-layout-overlay-wrapper inverse background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/trees.jpg');">
        <div class="mw-layout-overlay"></div>
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?> allow-drop">
            <h2 class="fx-deactivate">Request a Reservation</h2>
            <br />
            <br />

            <module type="contact_form" template="guesthouse"/>
        </div>
    </section>
</div>
