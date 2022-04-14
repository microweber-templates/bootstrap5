<?php

/*

type: layout

name: Misc 1

position: 1

categories: Misc

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

if (page_title()) {
    $title = page_title();
}
?>

<style>
    .mw-ui-btn-nav.mw-ui-btn-nav-tabs.df {
        display: flex;
        flex-direction: column;
        width: 300px;
    }

    .mw-ui-btn.df {
        justify-content: start;
        margin-bottom: 5px;
        margin-right: 5px;
        border-radius: 0!important;
        height: 60px;
    }

    .mw-ui-btn.df i{
        margin-right: 10px;
    }
    .mw-ui-box {
        display: table-cell;
        border: none;
        box-shadow: none !important;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit safe-mode allow-drop" field="layout-misc-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <module type="tabs" default_content="1" class="tabs" class="d-flex flex-column"/>
            </div>
        </div>
    </div>
</section>
