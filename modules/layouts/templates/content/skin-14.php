<?php

/*

type: layout

name: Content 14

position: 14

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-14-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center justify-content-md-between">
            <div class="col-12 col-sm-10 col-md-6 col-lg-5 mb-4">
                <div class="allow-drop">
                    <i class="mdi mdi-microsoft-windows icon-size-64px safe-element mb-5 d-block cloneable"></i>

                    <h1>What If They Let You Run The Hubble</h1>
                    <br/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-md-6 col-lg-6 mb-4 d-flex align-items-center">
                <div class="allow-drop">
                    <p class="lead">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck of your home or having.</p>
                </div>
            </div>
        </div>
    </div>
</section>
