<?php

/*

type: layout

name: Content 50

position: 50

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-50-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center justify-content-lg-between">
            <div class="col-12 col-sm-10 col-lg-4 pb-5 text-center text-lg-start">
                <div class="allow-drop">
                    <h3>Advertising Internet Online Opportunities To Explore</h3>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-7 allow-drop">
                <p class="lead">For business professionals caught between high OEM price and mediocre print and graphic output, there’s a solution: Business Express’s Eclipse line of compatible laser toner cartridges that meet </p>
                <br />
                <div class="nodrop">
                    <div class="cloneable me-1">
                        <module type="btn" button_style="btn-primary" button_size="btn-md px-5" text="Button"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
