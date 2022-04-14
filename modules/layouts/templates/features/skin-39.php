<?php

/*

type: layout

name: Feature 39

position: 39

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

<section class="section  <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-39-<?php print $params['id'] ?>" rel="module" style="background-color: #f5f5f5; padding-top: 1px;">
    <div class="container">
            <div class="row m-1 text-center text-sm-center">
                <div class="col-md-6 col-lg-4 mb-2 px-1 cloneable">
                    <div class="allow-drop p-5" style="background-color: #FFFFFF; border-radius: 20px; margin: 0px 10px;">
                        <h6 class="mb-3">Basic</h6>
                        <h2 class="mb-3">€30/m²</h2>
                        <br>
                        <br>
                        <p class="mb-4">Unlimited planning solutions 3D</p>
                        <p class="mb-4">‌visualization of all rooms</p>
                        <p class="mb-4">Working documentation Work</p>
                        <p class="mb-4">with suppliers and contractors</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-2 px-1 cloneable">
                    <div class="allow-drop p-5" style="background-color: #FFFFFF; border-radius: 20px; margin: 0px 10px;">
                        <h6 class="mb-3">Standard</h6>
                        <h2>€50/m²</h2>
                        <br>
                        <br>
                        <p class="mb-4">Unlimited planning solutions 3D</p>
                        <p class="mb-4">visualization of all rooms</p>
                        <p class="mb-4">Working documentation Work</p>
                        <p class="mb-4">with suppliers and contractors</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-2 px-1 cloneable">
                    <div class="allow-drop p-5" style="background-color: #FFFFFF; border-radius: 20px; margin: 0px 10px;">
                        <h6 class="mb-3">Premium</h6>
                        <h2>€70/m²</h2>
                        <br>
                        <br>
                        <p class="mb-4">Unlimited planning solutions 3D </p>
                        <p class="mb-4">visualization of all rooms </p>
                        <p class="mb-4">Working documentation Work </p>
                        <p class="mb-4">with suppliers and contractors</p>
                    </div>
                </div>
            </div>
    </div>
</section>
