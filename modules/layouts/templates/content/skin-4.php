<?php

/*

type: layout

name: Content 4

position: 4

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class="mb-3   font-weight-bold">The Amazing Hubble</h6>
                <h3>The Basics Of Buying A Telescope</h3>
                <p class="mb-3">I’m not really sure how old I was when I got the gift for Christmas, but I remember thinking it was a pretty impressive piece of electronic hardware. It was really cool looking (technologically speaking), and I was awfully proud to own it. It certainly made for lots of fun times.</p>
            </div>
        </div>

        <div class="row cloneable mb-3 py-4">
            <div class="col-12 col-md-6 col-lg-3 mb-4 border-start border-left-3 border-primary p-4 d-flex flex-column cloneable allow-drop">
                <h4>Shooting Stars</h4>
                <p>Point of Sale hardware, the till at a shop check out, has become very complex</p>

                <div class="d-inline-block mt-md-auto mt-5">
                    <module type="btn" button_style="btn-link" button_size=" " text="Learn more"/>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4 border-start border-left-3 border-primary p-4 d-flex flex-column cloneable allow-drop">
                <h4>Asteroids</h4>
                <p>Point of Sale hardware, the till at a shop check out, has become very complex </p>

                <div class="d-inline-block mt-md-auto mt-5">
                    <module type="btn" button_style="btn-link" button_size=" " text="Learn more"/>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4 border-start border-left-3 border-primary p-4 d-flex flex-column cloneable allow-drop">
                <h4>Telescopes 101</h4>
                <p>Point of Sale hardware, the till at a shop check out, has become very</p>

                <div class="d-inline-block mt-md-auto mt-5">
                    <module type="btn" button_style="btn-link" button_size=" " text="Learn more"/>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-4 border-start border-left-3 border-primary p-4 d-flex flex-column cloneable allow-drop">
                <h4>Moon Fever</h4>
                <p>Point of Sale hardware, the till at a shop check out, has become very complex</p>

                <div class="d-inline-block mt-md-auto mt-5">
                    <module type="btn" button_style="btn-link" button_size=" " text="Learn more"/>
                </div>
            </div>
        </div>

        <div class="row cloneable py-4">
            <div class="col-12 allow-drop text-center">
                <module type="btn" button_size="px-5" text="Button"/>
            </div>
        </div>
    </div>
</section>
