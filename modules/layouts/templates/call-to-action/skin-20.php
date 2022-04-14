<?php

/*

type: layout

name: Call to action 20

position: 20

categories: Call to Action

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

<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-20-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-10 col-lg-5 text-center text-lg-start d-flex align-items-center">
                <div class="w-100 allow-drop">
                    <h5>Astronomy Or Astrology</h5>
                    <p class="mb-0">This is certainly true in astronomy both in terms</p>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 allow-drop d-flex align-items-center justify-content-lg-end justify-content-center mt-2 mt-sm-0 mx-auto">
                <module type="contact_form" template="subscribe-1"/>
            </div>
        </div>
    </div>
</section>
