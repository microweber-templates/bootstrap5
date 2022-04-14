<?php

/*

type: layout

name: Content 29

position: 29

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-29-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center mb-5 nodrop">
            <div class="col-12 col-lg-8 col-lg-8 mx-auto allow-drop">
                <h1 class="mb-3">Beyond The Naked Eye</h1>
                <p class="lead-2 mb-3">Planning to visit Las Vegas or any other vacational resort where casinos Planning to visit Las Vegas or any other vacational resort where casinos </p>
            </div>
        </div>

        <div class="row cloneable mb-3 py-4">
            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   p-5">
                    <div class="allow-drop">
                        <i class="mdi mdi-cloud-outline icon-size-42px mb-2 d-block safe-element cloneable"></i>
                        <h4 class="mb-4">Look Up In The Sky</h4>
                        <p class="mb-2">According to the research firm Frost & Sullivan, the estimated</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   p-5">
                    <div class="allow-drop">
                        <i class="mdi mdi-emoticon-happy-outline icon-size-42px mb-2 d-block safe-element cloneable"></i>
                        <h4 class="mb-4">Radio Astronomy</h4>
                        <p class="mb-2">According to the research firm Frost & Sullivan, the estimated</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable">
                <div class="h-100 d-flex flex-column border   p-5">
                    <div class="allow-drop">
                        <i class="mdi mdi-thumb-up-outline icon-size-42px mb-2 d-block safe-element cloneable"></i>
                        <h4 class="mb-4">Space The Final Frontier</h4>
                        <p class="mb-2">According to the research firm Frost & Sullivan, the estimated</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="allow-drop text-center">
            <module type="btn" button_size="btn-md px-5" text="Learn More"/>
        </div>
    </div>
</section>
