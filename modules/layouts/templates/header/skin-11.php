<?php

/*

type: layout

name: Header 11

position: 11

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-5';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<module type="slider" template="bxslider-skin-2" data-controls="false" data-pager="false" pager_custom="bx-pager" />
