<?php

/*

type: layout

name: Call to action 2

position: 2

categories: Call to Action

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row flex-lg-nowrap mh-350">
            <div class="col-12 col-sm-10 col-lg-6 pb-5 mb-4 pe-lg-5 ps-0 text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div class="allow-drop">
                    <h3>What is The Big for Marketing Your Business</h3>
                    <br><br>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="row nodrop d-flex justify-content-center justify-content-lg-start px-0 mt-5">
                        <a href="#" class="w-150"><img src="<?php print template_url(); ?>assets/img/layouts/google-play-white.png" class=" "></a>
                        <a href="#" class="w-150"><img src="<?php print template_url(); ?>assets/img/layouts/app-store-white.png" class=" "></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-8 order-1 order-lg-2 mb-4">
                <div class="background-image-holder mh-350 h-100" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/cta-2.png');"></div>
            </div>
        </div>
    </div>
</section>
