<?php

/*

type: layout

name: Testimonial 18

position: 18

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-testimonials-skin-18-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center text-sm-start d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-6 col-lg-6 col-lg-3 cloneable">
                <div class="allow-drop   mb-6">
                    <i class="mdi mdi-format-quote-close icon-size-24px   mb-4 d-block safe-element"></i>

                    <p class="lead">You might remember the Dell computer commercials in which a youth reports this exciting news to his friends that they are about</p>

                    <h6 class="mb-1">Caroline Colon</h6>
                    <small>Product Designer</small>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-6 col-lg-3 cloneable">
                <div class="allow-drop   mb-6">
                    <i class="mdi mdi-format-quote-close icon-size-24px   mb-4 d-block safe-element"></i>

                    <p class="lead">It is those feelings that drive our love of astronomy and our desire to learn more and more about it. </p>

                    <h6 class="mb-1">George Parsons</h6>
                    <small>Product Designer</small>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-6 col-lg-3 cloneable">
                <div class="allow-drop   mb-6">
                    <i class="mdi mdi-format-quote-close icon-size-24px   mb-4 d-block safe-element"></i>

                    <p class="lead">You might remember the Dell computer commercials in which a youth reports this exciting news to his friends that they are about</p>

                    <h6 class="mb-1">Hattie Armstrong</h6>
                    <small>Product Designer</small>
                </div>
            </div>
        </div>
    </div>
</section>
