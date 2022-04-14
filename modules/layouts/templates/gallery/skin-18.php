<?php

/*

type: layout

name: Gallery 18

description: Gallery 18

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-gallery-skin-18-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <module type="pictures" template="skin-10"/>
    </div>
</section>
