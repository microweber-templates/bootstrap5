<?php

/*

type: layout

name: Video 5

position: 5

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-video-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center nodrop">
            <div class="col-md-6 mx-auto allow-drop cloneable">
                <module type="video" template="default" url="https://www.youtube.com/watch?v=MFSawk8oLTU">
            </div>
            <div class="col-md-6 mx-auto allow-drop cloneable">
                <module type="video" template="default" url="https://www.youtube.com/watch?v=MFSawk8oLTU">
            </div>
        </div>
    </div>
</section>
