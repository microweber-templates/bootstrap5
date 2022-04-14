<?php

/*

type: layout

name: Content 11

position: 11

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-10';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section py-0 mw-layout-overlay-wrapper edit safe-mode nodrop" field="layout-content-skin-11-<?php print $params['id'] ?>" rel="module" data-parallax="true" data-overlay-x="1">
    <div class="mw-layout-overlay"></div>
    <div class="background-image-holder mh-450 d-flex align-items-end" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/content-11.jpg')">
        <div class="container mw-layout-overlay-container <?php print $layout_classes; ?> text-white">
            <div class="row">
                <div class="col-sm-12 mx-auto mx-lg-0 allow-drop">
                    <h3 class="font-weight-normal" style="color: #ffffff;">First off, you will need to set a budget<br/>
                        for your new purchase before deciding whether to shop for notebook or desktop computers. Many offices use.</h3>
                    <br/>
                    <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn more"/>

                </div>
            </div>
        </div>
    </div>
</section>
