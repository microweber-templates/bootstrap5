<?php

/*

type: layout

name: Header 25

position: 25

categories: Header


 */

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<div data-parallax="" data-overlay="1" data-overlay-black="" class="edit safe-mode nodrop" field="layout-skin-24-<?php print $params['id'] ?>" rel="module">
    <section class="guesthouse-header mw-layout-overlay-wrapper d-flex background-image-holder" style="background-image: url('<?php print template_url(); ?>assets/img/sections/main-home.jpg');">
        <div class="mw-layout-overlay"></div>

        <div class="container mw-layout-overlay-container align-self-end <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="info-holder allow-drop">
                        <h2 class="fx-deactivate">Welcome to our <strong>Cliff House</strong></h2>
                        <p class="header-section-p">The heart of the mountain</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
