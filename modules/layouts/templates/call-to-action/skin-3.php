<?php

/*

type: layout

name: Call to action 3

position: 3

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

<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 col-lg-12 mx-auto allow-drop">
                <h1 class="m-0">Get closer to the biggest</h1>
                <p class="lead-2">Sign up for updates and new features</p>
                <br/>

                <module type="contact_form" template="subscribe-6"/>

                <div class="nodrop mt-5">
                    <div class="row text-center d-flex align-items-center justify-content-around">
                        <div class="col cloneable">
                            <img src="<?php print template_url(); ?>assets/img/layouts/logo_facebook.png"/>
                        </div>
                        <div class="col cloneable">
                            <img src="<?php print template_url(); ?>assets/img/layouts/logo_google.png"/>
                        </div>
                        <div class="col cloneable">
                            <img src="<?php print template_url(); ?>assets/img/layouts/logo_linkedin.png"/>
                        </div>
                        <div class="col cloneable">
                            <img src="<?php print template_url(); ?>assets/img/layouts/logo_logitech.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

