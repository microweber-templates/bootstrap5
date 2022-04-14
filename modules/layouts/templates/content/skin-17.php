<?php

/*

type: layout

name: Content 17

position: 17

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-17-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">
                <div class="pe-lg-5 text-center text-lg-start pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-17.jpg" class=" "/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-4 mx-auto text-center text-lg-start d-flex align-items-center">
                <div class="allow-drop">
                    <div class="d-inline nodrop">
                        <h6 class="mb-4   font-weight-bold">Advice Looking</h6>
                        <h1>The Amazing Hubble</h1>
                        <br>
                    </div>

                    <p class="lead">There are many reputed companies like Canon, Epson, Dell, and Lexmark that provide the necessary cartridges to replace the empty cartridges. Replacing inkjet</p>
                    <br />
                    <module type="btn" text="BUTTON" button_style="btn-primary" button_size="btn-sm px-5"/>
                </div>
            </div>
        </div>
    </div>
</section>
