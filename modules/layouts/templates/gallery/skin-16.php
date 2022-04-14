<?php

/*

type: layout

name: Gallery 16

description: Gallery 16

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="pictures" template="skin-8"/>
    </div>
</section>
