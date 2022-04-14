<?php

/*

type: layout

name: Header 4

position: 4

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-5';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section mw-layout-overlay-wrapper  py-0 edit " field="layout-header-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="mw-layout-overlay"></div>
    <div class="mh-100vh d-flex align-items-center background-image-holder">
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="row">
                        <div class="col-12 text-center text-lg-start">
                            <h5 class="mb-5">Your company name here</h5>
                            <h1 class="header-section-title display-3">Describe your company and services with few words.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
