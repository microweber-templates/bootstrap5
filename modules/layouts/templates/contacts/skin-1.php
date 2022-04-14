<?php

/*

type: layout

name: Contacts 1

position: 1

categories: Contact Us

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
<style>
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps .relative{
        height: 100% !important;
    }
</style>
<div class="position-relative overflow-hidden">
    <module type="google_maps" class="position-absolute w-100 h-100"/>
    <section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode  " field="layout-contacts-skin-1-<?php print $params['id'] ?>" rel="module">

        <div class="container">
            <div class="row d-flex justify-content-end">

                <div class="col-12 col-lg-6 allow-drop position-relative bg-white">
                    <div class="px-5 py-5">
                        <h4 class="mb-4">Contact Us</h4>
                        <p>We’re here to help and answer any question you might have. </p>
                        <module type="contact_form" template="skin-3"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
