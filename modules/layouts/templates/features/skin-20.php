<?php

/*

type: layout

name: Feature 20

position: 20

categories: Features

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-20-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h1>Get The Boot A Birds Eye Look Into Mcse Boot Camps</h1>
                <p>Third, you will likely be required to install the fixed mounts. These are what will keep the apparatus stable and secure with your computer monitor in it. Follow directions carefully so that you can be sure to get everything installed tightly. This is what will keep your monitor safe</p>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row text-center mt-5">
            <div class="mx-auto col mb-5 cloneable">
                <div class="text-center mt-6 allow-drop">
                    <i class="mdi mdi-cube-outline icon-size-64px d-block mb-7 safe-element"></i>
                    <h5>Feature One</h5>
                </div>
            </div>

            <div class="mx-auto col mb-5 cloneable">
                <div class="text-center mt-6 allow-drop">
                    <i class="mdi mdi-copyright icon-size-64px d-block mb-7 safe-element"></i>
                    <h5>Feature Two</h5>
                </div>
            </div>

            <div class="mx-auto col mb-5 cloneable">
                <div class="text-center mt-6 allow-drop">
                    <i class="mdi mdi-tree-outline icon-size-64px d-block mb-7 safe-element"></i>
                    <h5>Feature Three</h5>
                </div>
            </div>

            <div class="mx-auto col mb-5 cloneable">
                <div class="text-center mt-6 allow-drop">
                    <i class="mdi mdi-truck-outline icon-size-64px d-block mb-7 safe-element"></i>
                    <h5>Feature Four</h5>
                </div>
            </div>
        </div>

        <div class="allow-drop text-center">
            <br /><br />
            <module type="btn" button_style="btn-primary" button_size="btn-md px-5" text="Button"/>
        </div>
    </div>
</section>
