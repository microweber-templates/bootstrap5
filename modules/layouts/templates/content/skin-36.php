<?php

/*

type: layout

name: Content 36

position: 36

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-36-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="text-center text-lg-start pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-36.jpg" class=" "/>
                </div>
            </div>

            <div class="col-lg-1"></div>

            <div class="col-12 col-sm-10 col-lg-5 mx-auto pb-5 text-center text-lg-start d-flex align-items-center">
                <div class="allow-drop">
                    <h1 class="mb-3">Addiction When Gambling Becomes A Problem</h1>

                    <p class="lead">I have thought of what he said and come to the conclusion that he had a point. Yes. We need money and we should not aim to lead a moneyless existence; its pointless and will only cause us and our families many heartbreaks in the future.</p>
                </div>
            </div>
        </div>
    </div>
</section>
