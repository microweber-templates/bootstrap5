<?php
/*

  type: layout

  name: Feature 21

  position: 21

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-21-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class="  font-weight-bold">The Amazing Hubble</h6>
            </div>
        </div>

        <div class="allow-drop"><br /><br /><br /></div>

        <div class="row d-flex justify-content-center text-center text-md-start">
            <div class="col-sm-10 col-md-6 col-lg-3 mb-6 cloneable p-1">
                <div class="h-100 d-flex flex-column allow-drop">

                    <div class="px-0 col-md-2">
                        <i class="mdi mdi-telescope   icon-size-48px mb-6 d-inline-block safe-element cloneable d-inile-block"></i>
                    </div>
                    <h4>Asteroids</h4>
                    <p>Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop and think about what we are saying.</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-6 cloneable p-1">
                <div class="h-100 d-flex flex-column allow-drop">

                    <div class="px-0 col-md-2">
                        <i class="mdi mdi-video-check   icon-size-48px mb-6 d-inline-block safe-element"></i>
                    </div>

                    <h4>Video Games Playing With Imagination</h4>
                    <p>Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop.</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-6 cloneable p-1">
                <div class="h-100 d-flex flex-column allow-drop">
                    <div class="px-0 col-md-2">
                        <i class="mdi mdi-gamepad-up   icon-size-48px mb-6 d-inline-block safe-element"></i>
                    </div>

                    <h4>Radio Astronomy</h4>
                    <p>Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop and think about what we are saying.</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-6 cloneable p-1">
                <div class="h-100 d-flex flex-column allow-drop">
                   <div class="px-0 col-md-2">
                       <i class="mdi mdi-space-station   icon-size-48px mb-6 d-inline-block safe-element"></i>
                   </div>

                    <h4>Life Advice Looking Through A Window</h4>
                    <p>Speaking comes to most people as naturally as breathing. On many occasions our words are uttered without conscious thought; in fact we rarely stop.</p>
                </div>
            </div>
        </div>
    </div>
</section>
