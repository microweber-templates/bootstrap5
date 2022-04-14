<?php

/*

type: layout

name: Gallery 9

position: 9

categories: Gallery

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-9-<?php print $params['id'] ?>" rel="module">
    <module type="slider" template="bxslider-skin-4" controls="true" pager="false"/>
</section>
