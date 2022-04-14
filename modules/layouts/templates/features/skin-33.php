<?php

/*

type: layout

name: Feature 33

position: 33

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
<style>
    .hover-  :hover {
        border-color: transparent !important;
    }
</style>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-33-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row m-1 text-center text-sm-start">
            <div class="mx-auto col-sm-10 col-md-6 col-lg-6 mb-6 px-1 cloneable">
                <div class="h-100 d-flex flex-column border border-color-primary hover-   hover-text-dark py-5 px-5">
                    <div class="d-block d-sm-flex align-items-center h-100">
                        <div class="allow-drop">
                            <h6 class="    mb-5">Headline</h6>
                            <h3>Internet Advertising What Went Wrong</h3>
                            <p class="mb-2">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own</p>
                            <br />
                            <module type="btn" text=">>>" button_style="btn-primary   btn-sm" button_size="px-2"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 col-lg-6 mb-6 px-1 cloneable">
                <div class="h-100 d-flex flex-column border border-color-primary hover-   hover-text-dark py-5 px-5">
                    <div class="d-block d-sm-flex align-items-center h-100">
                        <div class="allow-drop">
                            <h6 class="    mb-5">Headline</h6>
                            <h3>Internet Advertising What Went Wrong</h3>
                            <p class="mb-2">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own</p>
                            <br />
                            <module type="btn" text=">>>" button_style="btn-primary   btn-sm" button_size="px-2"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
