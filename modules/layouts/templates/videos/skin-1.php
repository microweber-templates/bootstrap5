<?php

/*

type: layout

name: Video 1

position: 1

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-video-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center nodrop">
            <div class="col-12 col-lg-10 mx-auto allow-drop cloneable">
                <module type="video" template="default" url="https://www.youtube.com/watch?v=MFSawk8oLTU" height="500">
            </div>
        </div>
    </div>
</section>
