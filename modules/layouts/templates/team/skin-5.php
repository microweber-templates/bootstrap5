<?php

/*

type: layout

name: Team 5

position: 5

categories: Team

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

<section class="section    <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-team-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="teamcard" template="skin-1" />
    </div>
</section>