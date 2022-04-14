<?php

/*

type: layout

name: Call to action 7

position: 7

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto text-center allow-drop">
                <h1>Shooting Stars</h1>
                <p class="lead">So to the uninitiated, the idea of “radio astronomy” seems strange. There are two reasons for that. First is that humans are far more visual than audio oriented.</p>
                <br/>
                <br/>
                <module type="btn" button_style="btn-primary" button_size="px-5" button_text="Start Now"/>
                <br/>
                <br/>
                <br/>

                <div class="d-flex flex-wrap flex-lg-nowrap justify-content-center text-center text-md-start nodrop">
                    <div class="mb-4 mx-5 cloneable">
                        <div class="w-80 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-1-7.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 mt-lg-7 cloneable">
                        <div class="w-80 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-1-1.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable">
                        <div class="w-80 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-7-1.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 mt-lg-7 cloneable">
                        <div class="w-80 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-7-3.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable">
                        <div class="w-80 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-7-2.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 mt-lg-7 cloneable">
                        <div class="w-80 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-1-5.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mx-5 cloneable">
                        <div class="w-80 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-1-4.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
