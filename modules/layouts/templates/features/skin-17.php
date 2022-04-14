<?php
/*

  type: layout

  name: Feature 17

  position: 17

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-17-<?php print $params['id'] ?>" rel="module">
    <div class="container">

        <div class="row d-flex justify-content-center text-center text-md-start">
            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable">
                <div class="h-100 d-flex flex-column allow-drop">
                    <h4 class=" ">How To Look Up</h4>
                    <p>The buying of large-screen TVs has absolutely skyrocketed lately. It seems that everyone wants one – and with good reason. The large-screen TV has come a long way from those faded-out behemoths of old that took up half your living room </p>

                    <div class="mt-md-auto mt-5">
                        <module type="btn" button_style="btn-outline-primary   " button_size="btn-sm px-4" text="Learn More"/>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable">
                <div class="h-100 d-flex flex-column allow-drop">
                    <h4 class=" ">Telescopes 101</h4>
                    <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had access to before. From your wrist watch to your laptop, a lot of the on the go electronics</p>

                    <div class="mt-md-auto mt-5">
                        <module type="btn" button_style="btn-outline-primary   " button_size="btn-sm px-4" text="Learn More"/>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable">
                <div class="h-100 d-flex flex-column allow-drop">
                    <h4 class=" ">Look Up In The Sky</h4>
                    <p>If you are looking for a new way to promote your business that won’t cost you more money, maybe printing is one of the options you won’t resist. Printing is a widely use process in making printed materials that are used for advertising. Brochure, catalogs, flyers</p>

                    <div class="mt-md-auto mt-5">
                        <module type="btn" button_style="btn-outline-primary   " button_size="btn-sm px-4" text="Learn More"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
