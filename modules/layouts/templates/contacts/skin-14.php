<?php

/*

type: layout

name: Contacts 14

position: 14

categories: Contact Us

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

<style>
    @media screen and (min-width: 575px) {
    <?php echo '#' . $params['id'] . ' '; ?> .bg-body {
        max-width: 70% !important;
    }
    }

    @media screen and (min-width: 768px) {
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps,
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps .relative {
        height: 100% !important;
    }

    <?php echo '#' . $params['id'] . ' '; ?> .bg-body {
                                                 max-width: 50% !important;
                                             }
    }
</style>

<?php

/*

type: layout

name: Contacts 15

position: 15

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

<style>
    @media screen and (min-width: 768px) {
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps,
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps .relative {
        height: 100% !important;
    }
    }
</style>

<section class="section <?php print $layout_classes; ?> form-control-outline-dark edit safe-mode  " field="layout-contacts-skin-14-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center text-lg-start">
            <div class="col-sm-10 col-md-6 col-lg-5">

                <div class="my-5">
                    <h2 class="my-5">Contact us:</h2>
                    <p class="lead">+12 345 6789</p>
                    <p class="lead"><a href="mailto:email@yourwebsite.com">email@yourwebsite.com</a></p>
                    <p class="lead">www.yourwebsite.com</p>
                </div>

                <div class="my-5">
                    <p class="lead">Sofia, Bulgaria</p>
                    <p class="lead">We love to place promotions on our social networks.</p>
                    <p class="lead">To follow them and know about them follow us.</p>
                </div>

                <div class="my-5">
                    <module type="social_links" template="skin-1">
                </div>

            </div>

            <div class="col-sm-12 col-md-6 col-lg-7 px-0 overflow-hidden">

                <div class="d-flex flex-column h-100">
                    <module type="google_maps" class="w-100"/>


                </div>
            </div>
        </div>

    </div>
</section>
