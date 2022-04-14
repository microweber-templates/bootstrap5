<?php

/*

type: layout

name: Feature 25

position: 25

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-25-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row mb-3 py-4 text-center text-sm-center d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-8 col-lg-5 mb-6">
                <div class="w-125 mx-auto mb-7 icon-size-64px">
                    <div class="rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-bike   position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="allow-drop">
                    <h3>Astronomy Or Astrology</h3>
                    <p class="lead">If you are looking for a new way to promote your business that won’t cost you more money, maybe printing is one of the options you won’t resist. Printing is a widely use process in making printed</p>

                    <br/>
                    <br/>
                    <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn more"/>
                </div>
            </div>

            <div class="col-lg-1 d-none d-lg-inline-block text-center">
                <div class="border-end border-color-secondary border-width-2 h-100 mx-auto top-0 d-inline-block text-center w-auto nodrop"></div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-5 mb-6">
                <div class="w-125 mx-auto mb-7 icon-size-64px">
                    <div class="rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-biathlon   position-absolute safe-element"></i>
                    </div>
                </div>

                <div class="allow-drop">
                    <h3>Radio Astronomy</h3>
                    <p class="lead">There are number of instructions to be followed at the time of refilling an inkjet cartridge. So whenever your printer ink runs dry you need to follow the below steps for inkjet cartridge refill.</p>

                    <br/>
                    <br/>
                    <module type="btn" button_style="btn-link" button_size="btn-md" text="Learn more"/>
                </div>
            </div>

        </div>
    </div>
</section>
