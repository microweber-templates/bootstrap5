<?php

/*

type: layout

name: Feature 6

position: 6

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-6-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-7">
            <div class="col-12 col-lg-10 col-lg-10 mx-auto allow-drop">
                <h1>Profiles Of The Powerful <br />Advertising Exec Steve Grasse</h1>
                <p class="lead">In addition to the 2.0.3 install, you should be aware that some bugs have already been found, and that a plugin will need to be installed to repair those bugs. If you modify any of the files</p>
            </div>
        </div>

        <div class="row nodrop mb-5">
           <div class="col-12 d-md-flex justify-content-center">
               <div class="col-6 col-lg-3 cloneable mb-5">
                   <h6 class="  font-weight-bold">Asteroids</h6>

                   <ul class="mw-default-layout-un-ordered-t4 ps-0">
                       <li class="my-3"> Long Feature One</li>
                       <li class="my-3"> Feature Two</li>
                       <li class="my-3"> Long Feature Three</li>
                   </ul>
               </div>

               <div class="col-6 col-lg-3 cloneable mb-5">
                   <h6 class="  font-weight-bold">The Night Sky</h6>

                   <ul class="mw-default-layout-un-ordered-t4 ps-0">
                       <li class="my-3"> Long Feature One</li>
                       <li class="my-3"> Feature Two</li>
                       <li class="my-3"> Long Feature Three</li>
                   </ul>
               </div>

               <div class="col-6 col-lg-3 cloneable mb-5">
                   <h6 class="  font-weight-bold">Telescopes 101</h6>

                   <ul class="mw-default-layout-un-ordered-t4 ps-0">
                       <li class="my-3"> Long Feature One</li>
                       <li class="my-3"> Feature Two</li>
                       <li class="my-3"> Long Feature Three</li>
                   </ul>
               </div>
           </div>

            <div class="allow-drop text-center">
                <module type="btn" button_style="btn-primary   " button_size="btn-md px-5" text="CONTACT US"/>
            </div>
           </div>
    </div>
</section>
