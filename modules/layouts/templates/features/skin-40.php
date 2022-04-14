<?php

/*

type: layout

name: Feature 40

position: 40

categories: Features

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'mw-p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'mw-p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="feature-40 <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-40-<?php print $params['id'] ?>" rel="module">
    <div class="container">

        <div class="row cloneable">
            <div class="col-12 text-center mb-5">
                <h3>How it works?</h3>
            </div>
        </div>

        <div class="timeline">
            <h2 class="timeline__item timeline__item--year cloneable"></h2>
            <div class="timeline__item cloneable">
                <h3 class="timeline__title">Contact our team</h3>
                <p class="timeline__description">Contact us and describe your problem <br/>We are ready to help</p>
            </div>


            <h2 class="timeline__item timeline__item--year cloneable"></h2>
            <div class="timeline__item cloneable">
                <h3 class="timeline__title">Free diagnostics fromour masters</h3>
                <p class="timeline__description">We will make a free diagnostic first</p>
            </div>


            <h2 class="timeline__item timeline__item--year cloneable"></h2>
            <div class="timeline__item cloneable">
                <h3 class="timeline__title">We start to repair it</h3>
                <p class="timeline__description">We will let you know about the problem and the solution</p>
            </div>

            <h2 class="timeline__item timeline__item--year cloneable"></h2>
            <div class="timeline__item cloneable">
                <h3 class="timeline__title">We start to repair it</h3>
                <p class="timeline__description">We will let you know about the problem and the solution</p>
            </div>
        </div>
    </div>
</section>
