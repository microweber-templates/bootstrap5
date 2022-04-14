<?php

/*

type: layout

name: Content 18

position: 18

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-18-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-8 col-lg-6 mx-auto allow-drop">
                <h6 class="mb-3   font-weight-bold">Asteroids</h6>
                <p class="mb-3">Stu Unger is one of the biggest superstars to have immerged from the professional poker world. </p>
            </div>
        </div>

        <div class="row cloneable mb-3 py-4">
            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column border-bottom">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-18-1.jpg" class="  "/>
                    </div>
                    <div class="allow-drop pt-5 pb-3 mt-md-auto mt-5">
                        <h4 class="mb-4">The Night Sky</h4>
                        <small class="text-dark font-weight-bold d-block mb-2">ADVICE LOOKING</small>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column border-bottom">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-18-2.jpg" class="  "/>
                    </div>
                    <div class="allow-drop pt-5 pb-3 mt-md-auto mt-5">
                        <h4 class="mb-4">Shooting Stars</h4>
                        <small class="text-dark font-weight-bold d-block mb-2">ADVICE LOOKING</small>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 col-lg-4 mb-5 cloneable">
                <div class="h-100 d-flex flex-column border-bottom">
                    <div class="img-as-background h-350">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-18-3.jpg" class="  "/>
                    </div>
                    <div class="allow-drop pt-5 pb-3 mt-md-auto mt-5">
                        <h4 class="mb-4">Astronomy Or Astrology</h4>
                        <small class="text-dark font-weight-bold d-block mb-2">ADVICE LOOKING</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
