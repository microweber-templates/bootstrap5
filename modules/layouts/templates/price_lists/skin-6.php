<?php

/*

type: layout

name: Price Lists 6

position: 6

categories: Price Lists

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-70';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="<?php print $layout_classes; ?> section pt-0 edit safe-mode  " field="layout-price-lists-skin-6-<?php print $params['id'] ?>" rel="module">
    <section class="safe-mode  " data-parallax="true" data-overlay-x="1">
        <div class="background-image-holder mh-450 d-flex align-items-end" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/salads.jpg')">

        </div>
    </section>
    <div class="container  ">
        <div class="row   py-4">
            <h3 class="text-center py-3">MAIN DISHES</h3>
            <p class="text-center">Try our specialities. <br> We go to a restaurant to try something delicious and different that can't cook at home.</p>
            <div class="row d-flex">
                <div class="col-md-6">
                    <div class="cloneable py-2">
                        <div class="py-2"><h6 class="safe-element">MUSSALES SOUP</h6></div>
                        <div class="d-flex"><p class="price-list-content col-8 safe-element px-0">Lorem Ipsum has been the industry's standard dummy text</p><span class="col-4 justify-content-end text-end text-right px-0">$ 23.00</span></div>
                        <hr class="price-list-hr">
                    </div>

                    <div class="cloneable py-2">
                        <div class="py-2"><h6 class="safe-element">SICILIAN MEATBALLS</h6></div>
                        <div class="d-flex"><p class="price-list-content col-8 safe-element px-0">Lorem Ipsum has been the industry's standard dummy text</p><span class="col-4 justify-content-end text-end text-right px-0">$ 30.00</span></div>
                        <hr class="price-list-hr">
                    </div>

                    <div class="cloneable py-2">
                        <div class="py-2"><h6 class="safe-element">ITALIAN SPAGHETTI</h6></div>
                        <div class="d-flex"><p class="price-list-content col-8 safe-element px-0">Lorem Ipsum has been the industry's standard dummy text</p><span class="col-4 justify-content-end text-end text-right px-0">$ 35.00</span></div>
                        <hr class="price-list-hr">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cloneable py-2">
                        <div class="py-2"><h6 class="safe-element">BEEF BURGER</h6></div>
                        <div class="d-flex"><p class="price-list-content col-8 safe-element px-0">Lorem Ipsum has been the industry's standard dummy text</p><span class="col-4 justify-content-end text-end text-right px-0">$ 23.00</span></div>
                        <hr class="price-list-hr">
                    </div>

                    <div class="cloneable py-2">
                        <div class="py-2"><h6 class="safe-element">ROAST CHIKEN</h6></div>
                        <div class="d-flex"><p class="price-list-content col-8 safe-element px-0">Lorem Ipsum has been the industry's standard dummy text</p><span class="col-4 justify-content-end text-end text-right px-0">$ 30.00</span></div>
                        <hr class="price-list-hr">
                    </div>

                    <div class="cloneable py-2">
                        <div class="py-2"><h6 class="safe-element">SEAFOOD SALAD</h6></div>
                        <div class="d-flex"><p class="price-list-content col-8 safe-element px-0">Lorem Ipsum has been the industry's standard dummy text</p><span class="col-4 justify-content-end text-end text-right px-0">$ 35.00</span></div>
                        <hr class="price-list-hr">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

