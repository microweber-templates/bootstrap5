<?php
/*

  type: layout

  name: Feature 30

  position: 30

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-30-<?php print $params['id'] ?>" rel="module">
    <div class="container">

        <div class="row d-flex justify-content-center text-center text-md-center">
            <div class="col-sm-10 col-md-6 col-lg-3 mb-6 cloneable">
                <div class="h-100 d-flex flex-column allow-drop">
                    <i class="mdi mdi-robber icon-size-42px mb-6 d-inline-block safe-element cloneable"></i>

                    <h5>Radio Astronomy</h5>
                    <p>The history of video game is as interesting as a fairy tale. The quality of today’s video</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-6 cloneable">
                <div class="h-100 d-flex flex-column allow-drop">
                    <i class="mdi mdi-robot icon-size-42px mb-6 d-inline-block safe-element cloneable"></i>

                    <h5>Astronomy Or Astrology</h5>
                    <p>The history of video game is as interesting as a fairy tale. The quality of today’s video</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-6 cloneable">
                <div class="h-100 d-flex flex-column allow-drop">
                    <i class="mdi mdi-robot-mower icon-size-42px mb-6 d-inline-block safe-element cloneable"></i>

                    <h5>Asteroids</h5>
                    <p>The history of video game is as interesting as a fairy tale. The quality of today’s video</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-6 cloneable">
                <div class="h-100 d-flex flex-column allow-drop">
                    <i class="mdi mdi-roller-skate icon-size-42px mb-6 d-inline-block safe-element cloneable"></i>

                    <h5>Radio Astronomy</h5>
                    <p>The history of video game is as interesting as a fairy tale. The quality of today’s video</p>
                </div>
            </div>
        </div>
    </div>
</section>
