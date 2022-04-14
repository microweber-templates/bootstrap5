<?php

/*

type: layout

name: Content 16

position: 16

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-4 mx-auto text-center text-lg-start d-flex align-items-center order-2 order-lg-1">
                <div class="allow-drop">
                    <div class="d-inline nodrop">
                        <h1>The Glossary Of Telescopes</h1>
                        <br>
                    </div>

                    <p class="lead">Once the printer ink runs dry it has to be replaced with another inkjet cartridge. There are many reputed companies like Canon, Epson, Dell, and Lexmark that provide the necessary cartridges to replace the empty cartridges. Replacing inkjet</p>
                    <br/>
                    <module type="btn" text="Learn More" button_style="btn-link" button_size=""/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-8 mx-auto order-1 order-lg-2">
                <div class="text-center text-lg-end pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-16.jpg" class=" "/>
                </div>
            </div>
        </div>
    </div>
</section>
