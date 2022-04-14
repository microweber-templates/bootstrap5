<?php

/*

type: layout

name: Blog 12

position: 12

categories: Blog

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-blog-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="posts" template="skin-12" slides-md="2" slides-lg="3" slides-lg="4" adaptive_height="false" arrows="true" />
    </div>
</section>
