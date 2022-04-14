<?php

/*

type: layout

name: Content 26

position: 26

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-26-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-6">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h1>Profiles Of The Powerful Advertising Exec Steve Grasse</h1>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="pe-lg-5 pb-5">
                    <div class="row m-0">
                        <div class="col-12 pb-2 px-1">
                            <div class="img-as-background h-250">
                                <img src="<?php print template_url(); ?>assets/img/layouts/content-26-1.jpg" class="border">
                            </div>
                        </div>

                        <div class="col-6 px-1">
                            <div class="img-as-background h-250">
                                <img src="<?php print template_url(); ?>assets/img/layouts/content-26-2.jpg" class="border">
                            </div>
                        </div>

                        <div class="col-6 px-1">
                            <div class="img-as-background h-250">
                                <img src="<?php print template_url(); ?>assets/img/layouts/content-26-3.jpg" class="border">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 d-flex flex-column allow-drop pb-5">
                <div class="my-3 nodrop cloneable">
                    <h5>Beyond The Naked Eye</h5>
                    <p>For business professionals caught between high OEM price and mediocre print and graphic output, there’s a solution</p>
                </div>

                <div class="my-3 nodrop cloneable">
                    <h5>Moon Gazing</h5>
                    <p>Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble! </p>
                </div>

                <div class="my-3 nodrop cloneable">
                    <h5>Astronomy Or Astrology</h5>
                    <p>Having a baby can be a nerve wracking experience for new parents – not the nine months of pregnancy, I’m talking about after the infant is brought home from the hospital</p>
                </div>
            </div>
        </div>
    </div>
</section>
