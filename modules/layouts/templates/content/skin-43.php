<?php

/*

type: layout

name: Content 43

position: 43

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-43-<?php print $params['id'] ?>" rel="module">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="text-center">
            <div class="row text-center nodrop">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                    <h1>Addiction When Gambling Becomes A Problem</h1>
                    <p class="lead">Are you considering buying a compatible inkjet cartridge for your printer? There are many reputed companies like Canon, Epson, Dell, and Lexmark.</p>
                    <br />
                    <br />
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-43.jpg" class=" "/>
                </div>
            </div>
        </div>
    </div>
</section>
