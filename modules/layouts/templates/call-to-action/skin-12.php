<?php

/*

type: layout

name: Call to action 12

position: 12

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

<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 col-lg-12">
                <div class="py-2 d-block d-lg-flex justify-content-between align-items-center">
                    <div class="py-4 text-center text-lg-start allow-drop"><h5 class="m-0">Leave your details and we will call you</h5></div>

                    <div class="py-4 text-center text-lg-end allow-drop">
                        <module type="contact_form" template="subscribe-3"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
