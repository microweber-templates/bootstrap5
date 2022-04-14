<?php

/*

type: layout

name: Content 2

position: 2

categories: Content

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


<section class="mw-layout-overlay-wrapper section <?php print $layout_classes; ?> edit safe-mode nodrop " field="layout-content-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="row text-center">
        <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
            <div class="cloneable mb-4 icon-size-64px"><i class="mdi mdi-fishbowl-outline safe-element"></i></div>
            <h1>Beyond The Naked Eye</h1>
            <p class="mb-3">If you are in the market for a computer, there are a number of factors to consider. <br/>Will it be used for your home, your office or perhaps even</p>
        </div>
    </div>
</section>
