<?php

/*

type: layout

name: Content 52

position: 52

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-52-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto pb-5">
                <div class="w-100 allow-drop text-center mb-6">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-52-1.jpg" class=" "/>
                </div>

                <div class="row">
                    <div class="col-md-4 text-center allow-drop py-4">
                        <img src="<?php print template_url(); ?>assets/img/layouts/content-52-2.jpg" class="rounded-circle"/>
                        <br/>
                        <br/>
                        <h5>Eleanor Paul</h5>
                        <hr class="element-hr mx-auto"/>
                        <p>From the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
                        <div class="border-end position-absolute h-100 right-0 top-0 d-none d-md-block nodrop"></div>
                    </div>

                    <div class="col-md-8 allow-drop py-4">
                        <p class="lead-2">Email, instant messaging and file sharing with other Internet users has also provided a platform for faster spreading of viruses, Trojans and Spyware. Being on the Internet without proper protection is like walking in the rain with no umbrella – you’re gonna get wet no matter how fast you run. With so many computers installed in home offices it becomes critical that home users install the latest </p>
                        <module type="btn" text="Learn More" button_style="btn-link" button_size=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
