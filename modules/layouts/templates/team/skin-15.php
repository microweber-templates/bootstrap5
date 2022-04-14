<?php

/*

type: layout

name: Team 15

position: 15

categories: Team

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-team-skin-15-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="teamcard" template="skin-5" />
    </div>
</section>
