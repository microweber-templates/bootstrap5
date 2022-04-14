<?php

/*

type: layout

name: Content 27

position: 27

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-27-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="mx-auto col-sm-10 col-md-6 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background h-300">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-27-1.jpg" class=" "/>
                    </div>
                    <div class="allow-drop pt-7 pb-6 px-5 mt-md-auto mt-5">
                        <h3 class="mb-2">The winter view</h3>
                        <p>From this moment on, choose not to let your past dictate your future. What is gone is gone – forever.</p>
                        <br />
                        <module type="btn" text="Button" button_style="btn-primary" button_size="btn-sm px-5"/>
                    </div>
                </div>
            </div>

            <div class="mx-auto col-sm-10 col-md-6 mb-5 cloneable">
                <div class="h-100 d-flex flex-column">
                    <div class="img-as-background h-300">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-27-2.jpg" class=" "/>
                    </div>
                    <div class="allow-drop pt-7 pb-6 px-5 mt-md-auto mt-5">
                        <h3 class="mb-2">The summer view</h3>
                        <p>For any aspect of self-improvement, there has to be a reason for you to start and keep going. </p>
                        <br />
                        <module type="btn" text="Button" button_style="btn-primary" button_size="btn-sm px-5"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
