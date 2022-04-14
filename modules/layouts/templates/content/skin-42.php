<?php

/*

type: layout

name: Content 42

position: 42

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-42-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row mh-650">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto background-image-holder mh-400 mb-5" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/content-42.jpg');"></div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto text-center text-lg-start d-flex align-items-center mb-5">
                <div class="container-fluid-right-col-in-container ms-md-5">
                    <div class="allow-drop ps-lg-7">
                        <h5 class="mb-4  ">Caps heading</h5>
                        <h1 class="mb-4">Enlightenment Is Not Just One State</h1>

                        <p class="lead">Are you considering buying a compatible inkjet cartridge for your printer? There are many reputed companies like Canon, Epson, Dell, and Lexmark that provide the necessary cartridges.</p>
                        <br/>

                        <div class="nodrop">
                            <a href="#" class="cloneable me-4"><img src="<?php print template_url(); ?>assets/img/layouts/content-42-2.png" class=" w-125"/></a>
                            <a href="#" class="cloneable me-4"><img src="<?php print template_url(); ?>assets/img/layouts/content-42-1.png" class=" w-125"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
