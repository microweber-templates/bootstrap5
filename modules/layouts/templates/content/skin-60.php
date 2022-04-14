<?php

/*

type: layout

name: Content 60

position: 60

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


<section class="section py-0 edit safe-mode nodrop" field="layout-content-skin-60-<?php print $params['id'] ?>" rel="global">
    <div style="background-color: #2b2b2b;">
        <div class="container <?php print $layout_classes; ?> text-white">
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
