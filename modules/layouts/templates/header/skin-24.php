<?php
/*

type: layout

name: Header 24

position: 24

categories: Header


 */
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'fluid-p-t';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'fluid-p-b';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>



<div data-overlay="0" data-parallax data-overlay-color="dark" background-position="center bottom" class="edit safe-mode nodrop" field="layout-skin-cover-<?php print $params['id'] ?>" rel="module">
    <section class="section mw-layout-overlay-wrapper <?php print $layout_classes; ?>   d-flex flex-center background-image-holder"
             style="background-image: url('<?php print template_url(); ?>assets/img/hero.jpg');
                 min-height: calc(100vh - 70px);
                 background-position: center bottom;
                 background-attachment: fixed;">

        <div class="mw-layout-overlay"></div>
        <div class="container mw-layout-overlay-container align-self-center mb-lg-10 text-center">
            <div class="row">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center allow-drop">
                    <h1 class="header-section-title display-1 mb-lg-3" style="font-weight: 800; letter-spacing: 8px;">CATHERINE<br class="d-lg-none"><span class="text-dark"> & </span><br class="d-lg-none">OLIVER</h1>
                    <p class="header-section-p lead-2" style="font-weight: 400;">12th of July. Downtown Brooklyn, New York.</p>
                </div>
            </div>
        </div>
    </section>
</div>







