<?php

/*

type: layout

name: Content 45

position: 45

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-45-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center justify-content-lg-between">
            <div class="col-12 col-sm-10 col-lg-5 pb-5 text-center text-lg-start">
                <div class="allow-drop">
                    <h1 class="mb-3">Shooting Stars</h1>

                    <p>With so many different ways today to find information online, it can sometimes be hard to know where to go to first. I want to look at the major and most effective</p>

                    <module type="btn" text="Learn More" button_style="btn-link" button_size=" "/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6">
                <h6 class="  mb-4">Categories</h6>
                <div class="row">
                    <div class="col-sm-4 col">
                        <ul class="no-style">
                            <li class="cloneable mb-3"><a href="#">First Link</a></li>
                            <li class="cloneable mb-3"><a href="#">Second Link</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col">
                        <ul class="no-style">
                            <li class="cloneable mb-3"><a href="#">First Link</a></li>
                            <li class="cloneable mb-3"><a href="#">Second Link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid background-image-holder h-550 mt-4" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/content-45.jpg');"></div>
</section>
