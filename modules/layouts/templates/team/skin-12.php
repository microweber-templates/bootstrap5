<?php

/*

type: layout

name: Team 12

position: 12

categories: Team

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-team-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-start text-left text-sm-start d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-12 col-md-10 col-lg-10 col-lg-8 mb-8 mx-auto cloneable">
                <div class="d-block d-sm-flex align-items-center">
                    <div class="my-5 me-md-5 d-flex justify-content-center position-relative">
                        <div class="w-250">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-12.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="allow-drop position-relative ps-5 py-3">
                        <div class="border-end position-absolute h-100 left-0 top-0 d-none d-sm-block nodrop"></div>

                        <h4 class="mb-1">Wesley Cole</h4>
                        <p class="mb-5">Founder</p>

                        <p class="lead">With so many different ways today to find information online, it can sometimes be hard to know where to go to first. I want to look at the major and most effective ways to find information online. </p>

                        <module type="btn" button_style="btn-link" button_size="btn-md px-0" text="Learn more"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
