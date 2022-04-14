<?php

/*

type: layout

name: Video 2

position: 2

categories: Video

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-video-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center nodrop">
            <div class="col-12 col-lg-10 mx-auto allow-drop cloneable">
                <module type="video" template="default" url="https://vimeo.com/151310368" height="500">
            </div>
        </div>
    </div>
</section>
