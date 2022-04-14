<?php

/*

type: layout

name: Content 31

position: 31

categories: Content

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-31-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-8 col-lg-8 mx-auto allow-drop">
                <h3 class="mb-3">What If They Let You Run The Hubble</h3>
                <p class="lead">Audio player software is used to play back sound recordings in one of the many formats available for computers today</p>
                <br/>
                <module type="btn" button_style="btn-link" button_size="btn-md px-5" text="Learn More"/>
            </div>
        </div>
    </div>
</section>
