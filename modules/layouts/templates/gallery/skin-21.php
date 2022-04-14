<?php

/*

type: layout

name: Gallery 21

description: Gallery 21

categories: Gallery
*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="py-0 section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-21-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-12">
                <module type="pictures" template="skin-12" style="padding: 0;"/>
            </div>
        </div>
    </div>
</section>
