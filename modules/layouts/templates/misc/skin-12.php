<?php

/*

type: layout

name: Accordions

position: 11

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="misc-12 d-flex <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-11-<?php print $params['id'] ?>" rel="module">
    <div class="container align-self-center allow-drop">
        <module type="accordion" template="misc-12"/>
    </div>
</section>
