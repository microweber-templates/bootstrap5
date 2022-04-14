<?php

/*

type: layout

name: Feature 19

position: 19

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-19-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h1>Help Finding Information Online</h1>
                <p class="lead">I can change any and everything in my life by simply changing myself. This puts me in
                    the driving seat of my life and makes</p>
                <br />
                <hr style="max-width: 60%;" class="thin mx-auto"/>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row text-center mt-7">
            <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable">
                <div class="w-80 mx-auto icon-size-72px">
                    <div class="square d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-pill   position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>A World Of Infinite</h4>
                    <p>A subscriber recently wrote to me: A friend of mine is on a fixed income and has maxed out his
                        credit cards (nearing $10,000). He has started a new business, but currently has no customers or
                        prospects. He is affirming that.</p>

                    <module type="btn" button_style="btn-link" button_size="btn-sm" text="Learn more"/>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable">
                <div class="w-80 mx-auto icon-size-72px">
                    <div class="square d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-heart-outline   position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>Benjamin Franklin</h4>
                    <p>Last month, my wife, Anne Doe, took me to Las Vegas because she had to go for a business
                        convention. Needless to say, she writes for an guide to casinos and I hate gambling. But then,
                        she likes it and this supports us too.</p>

                    <module type="btn" button_style="btn-link" button_size="btn-sm" text="Learn more"/>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-4 mb-5 cloneable">
                <div class="w-80 mx-auto icon-size-72px">
                    <div class="square d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-tag-outline   position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="text-center mt-6 allow-drop">
                    <h4>Off To See The Wizard</h4>
                    <p>Last month, my wife, Anne Doe, took me to Las Vegas because she had to go for a business
                        convention. Needless to say, she writes for an guide to casinos and I hate gambling. But then,
                        she likes it and this supports us too.</p>

                    <module type="btn" button_style="btn-link" button_size="btn-sm" text="Learn more"/>
                </div>
            </div>
        </div>

        <div class="allow-drop text-center">
            <br /><br />
            <module type="btn" button_style="btn-primary   " button_size="btn-md px-5" text="LEARN MORE"/>
        </div>
    </div>
</section>
