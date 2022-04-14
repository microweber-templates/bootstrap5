<?php

/*

type: layout

name: Call to action 9

position: 9

categories: Call to Action

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="mh-90vh d-flex align-items-end">
        <div class="container">
            <div class="row text-center nodrop">
                <div class="col-12 col-lg-10 col-lg-6 mx-auto allow-drop">
                    <h1>Adwords Keyword Research <br/> for Beginners</h1>
                    <p>A Pocket PC is a handheld computer, which features many</p>
                    <br/>

                    <module type="btn" text="Button" button_style="btn-primary   " button_size="btn-lg px-5"/>
                    <br />
                    <br />

                    <img src="<?php print template_url(); ?>assets/img/layouts/cta-9.png"/>
                </div>
            </div>
        </div>
    </div>
</section>
