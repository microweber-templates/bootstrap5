<?php

/*

type: layout

name: Testimonial 19

position: 19

categories: Testimonials

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-19-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center text-sm-start d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-6 col-lg-6 col-lg-3 cloneable">
                <div class="allow-drop   mb-6">
                    <h6 class="mb-1">Caroline Colon</h6>
                    <small>Product Designer</small>
                    <br>
                    <br>
                    <p class="lead">You might remember the Dell computer commercials in which a youth reports this exciting news to his friends that they are about</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-6 col-lg-3 cloneable">
                <div class="allow-drop   mb-6">
                    <h6 class="mb-1">George Parsons</h6>
                    <small>Product Designer</small>
                    <br>
                    <br>
                    <p class="lead">It is those feelings that drive our love of astronomy and our desire to learn more and more about it. </p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-6 col-lg-3 cloneable">
                <div class="allow-drop   mb-6">
                    <h6 class="mb-1">Hattie Armstrong</h6>
                    <small>Product Designer</small>
                    <br>
                    <br>
                    <p class="lead">You might remember the Dell computer commercials in which a youth reports this exciting news to his friends that they are about</p>
                </div>
            </div>
        </div>
    </div>
</section>
