<?php

/*

type: layout

name: Call to action 14

position: 14

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

<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-14-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-lg-6 mx-auto text-center allow-drop">
                <h1>Join 215,000 Fellow Marketers</h1>
                <p class="lead">Get expert marketing tips straight to your inbox, and become a better marketer. Subscribe to the Marketing Blog below.</p>

                <div class="px-4 nodrop">
                    <module type="contact_form" template="skin-2"/>
                </div>
            </div>
        </div>
    </div>
</section>
