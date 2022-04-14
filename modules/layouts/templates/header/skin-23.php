<?php

/*

type: layout

name: Header 23

position: 23

categories: Header

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop mw-layout-overlay-wrapper d-flex align-items-center" field="layout-header-skin-23-<?php print $params['id'] ?>" rel="module" style="    position: relative;
    min-height: 100vh;
    width: auto; ">

    <div class="mw-layout-overlay" style="z-index: 1;"></div>

    <div class="container mw-layout-overlay-container mx-auto d-flex justify-content-center <?php print $layout_classes; ?>">
        <div class="row">
            <div class="col-12 justify-content-center ">
                <div class="allow-drop">
                    <h2 style="color: #ffffff;">Welcome to our <strong>Cliff House</strong></h2>
                    <p class="header-section-p" style="color: #ffffff;">The heart of the mountain</p>
                </div>
            </div>
        </div>
    </div>

    <module type="video_background" template="background"   url="https://www.youtube.com/watch?v=MFSawk8oLTU">

</section>
