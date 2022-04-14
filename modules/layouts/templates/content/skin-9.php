<?php

/*

type: layout

name: Content 9

position: 9

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


<section class="section <?php print $layout_classes; ?> edit safe-mode" field="layout-content-skin-9-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <div class="pe-lg-5 text-center text-lg-start pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-9.jpg" class=" "/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto text-center text-lg-start pb-5 d-flex flex-column">
                <div class="typography-area allow-drop">
                    <h1>Home Audio Recording for Everyone</h1>
                    <br/><br/><br/>

                    <p class="lead">It is probably the dream of any amateur astronomer to be able to be the boss of one of the great multi million dollar telescopes even if it was just for one hour or for a few shots. Sure, we can have a lot of fun with our binoculars. </p>
                    <br/><br/><br/>

                    <h6 class="  mb-5">FEATURES</h6>

                </div>
                        <ul class=" ">
                            <li class="mb-3"> Feature One</li>
                            <li class="mb-3"> Feature Two</li>
                            <li class="mb-3"> Feature Three</li>
                        </ul>

                <div class="mt-md-auto mt-5 allow-drop pt-5">
                    <div class="row nodrop d-flex align-items-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
