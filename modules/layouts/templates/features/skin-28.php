<?php

/*

type: layout

name: Feature 28

position: 28

categories: Features

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-28-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 mx-auto allow-drop">
                <h1>The Amazing Hubble</h1>
                <p class="lead">While it was just a TV show, that little speech at the beginning of the original Star Trek show really did do a good job of capturing our feelings about space. </p>
                <br/>
                <module type="video" url="https://www.youtube.com/watch?v=pYmd_bF-eeU&ab_channel=LongBeachFinest"/>
            </div>
        </div>
    </div>
</section>
