<?php

/*

type: layout

name: Price Lists 5

position: 5

categories: Price Lists

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-70';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<style>
    .prices-skin-5 .white-text {
        color: #FFFFFF;
    }
</style>

<section class="section <?php print $layout_classes; ?> prices-skin-5 edit safe-mode  " field="layout-price-lists-skin-5-<?php print $params['id'] ?>" rel="module" style="background-color: #2b2b2b">
    <div class="container  ">
        <div class="row d-flex   py-4">
            <h3 class="white-text text-center py-5">Our menu</h3>
            <div class="col-lg-4 col-md-6">
                <div class="cloneable p-4">
                    <h5 class="py-2 cloneable white-text safe-element">Buttermilk Flapjacks — 8€</h5>
                    <p class="white-text cloneable">Two flapjacks served with molasses and our signature sassafras-infused whipped cream.</p>
                </div


                <div class="cloneable p-4">
                    <h5 class="py-2 cloneable white-text safe-element">Hotcakes & Sausage — 9€</h5>
                    <p class="white-text cloneable">Cornmeal and molasses hotcakes served with sweet fennel pork sausage.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="cloneable p-4">
                    <h5 class="py-2 cloneable white-text safe-element">Sourdough Biscuits — 8€</h5>
                    <p class="white-text cloneable">Four small biscuits served with boysenberry and blackberry compote and rosemary lard or apple maple butter.</p>
                </div

                <div class="cloneable p-4">
                    <h5 class="py-2 cloneable white-text safe-element">Baked Eggs & Bacon — 6€</h5>
                    <p class="white-text cloneable">Cage-free eggs, house-smoked bacon, and spinach baked in an iron skillet and topped with aged cheddar. Served with two pieces of cowboy fry bread.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="cloneable p-4">
                    <h5 class="py-2 cloneable white-text safe-element">Grits & Strawberries — 9€</h5>
                    <p class="white-text cloneable">Corn grits and local beans known as Arizona Strawberries. Served with onion, garlic, poblano, and ham gravy.</p>
                </div


                <div class="cloneable p-4">
                    <h5 class="py-2 cloneable white-text safe-element">Scrapple Scramble — 9€</h5>
                    <p class="white-text cloneable">Cornmeal-based pork scrapple cut into chunks and scrambled with cage-free eggs. Served with a fresh tomato and two sourdough biscuits.</p>
                </div>
            </div>
        </div>
    </div>
</section>

