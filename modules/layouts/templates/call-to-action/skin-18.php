<?php

/*

type: layout

name: Call to action 18

position: 18

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

<section class="section    form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-18-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-lg-7 text-center text-lg-start">
                        <div class="allow-drop d-flex h-100 justify-content-center flex-column py-5">
                            <h3>Space Shuttle as one of the greatest space exploration accomplishments</h3>
                            <p class="lead mb-0">All users on MySpace will know that there are millions of people out there. Every day besides </p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 allow-drop">
                        <div class="bg-body   px-5 py-5">
                            <h5 class="mb-4">Sign up</h5>
                            <module type="contact_form" template="subscribe-2" />
                            <small class="mt-4">Over time, even the most sophisticated, memory packed computer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
