<?php

/*

type: layout

name: Team 13

position: 13

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-team-skin-13-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row py-4 text-start text-left text-sm-start d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-6 col-lg-3 mb-3 cloneable">
                <div class="d-block text-md-start text-center">
                    <div class="mb-5 mx-auto text-center d-flex justify-content-center justify-content-md-start">
                        <div class="w-125">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-1-6.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="allow-drop">
                        <h5 class="mb-1">Isabelle Ingram</h5>
                        <p class="mb-5">Marketing Director</p>

                        <p class="lead">With so many different ways today to find information online, it can sometimes be hard to know where to go to first. I want to look at the major and most effective ways to find information online. </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-3 cloneable">
                <div class="d-block text-md-start text-center">
                    <div class="mb-5 mx-auto text-center d-flex justify-content-center justify-content-md-start">
                        <div class="w-125">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-1-8.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="allow-drop">
                        <h5 class="mb-1">Viola Wilson</h5>
                        <p class="mb-5">Marketing Director</p>

                        <p class="lead">Find information online, it can sometimes be hard to know where to go to first. I want to look at the major and most effective ways to find information online. </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-3 cloneable">
                <div class="d-block text-md-start text-center">
                    <div class="mb-5 mx-auto text-center d-flex justify-content-center justify-content-md-start">
                        <div class="w-125">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-1-2.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="allow-drop">
                        <h5 class="mb-1">Dominic Lloyd</h5>
                        <p class="mb-5">Marketing Director</p>

                        <p class="lead">With so many different ways today to find information online, it can sometimes be hard to know where to go to first. I want to look at the major and most effective ways to find information online. </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 mb-3 cloneable">
                <div class="d-block text-md-start text-center">
                    <div class="mb-5 mx-auto text-center d-flex justify-content-center justify-content-md-start">
                        <div class="w-125">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-1-5.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="allow-drop">
                        <h5 class="mb-1">Marvin Hall</h5>
                        <p class="mb-5">Marketing Director</p>

                        <p class="lead">It can sometimes be hard to know where to go to first. I want to look at the major and most effective ways to find information online. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
