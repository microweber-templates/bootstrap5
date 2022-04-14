<?php

/*

type: layout

name: Gallery 22

description: Gallery 22

categories: Gallery
*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-22-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-12">
                <module type="pictures" template="skin-13"/>
            </div>
        </div>
    </div>
</section>
