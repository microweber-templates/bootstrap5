<?php

/*

type: layout

name: Team 7

position: 7

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-team-skin-7-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class=" ">Asteroids</h6>
                <p>I’m not really sure how old I was when I got the gift for Christmas, but I remember thinking it was a pretty impressive piece of electronic hardware.</p>
                <br/><br/>
            </div>
        </div>

        <div class="allow-drop"></div>

        <div class="row pt-4 text-center text-sm-start d-flex justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-6 col-lg-6 mb-5 cloneable">
                <div class="d-block d-sm-flex align-items-center      px-4 py-5 h-100">
                    <div class="me-sm-4 mb-5 mb-sm-0 mx-auto mx-sm-0">
                        <div class="w-175 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-7-1.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="allow-drop">
                        <h4 class="mb-1">Margaret Pittman</h4>
                        <p class="mb-3">UI/UX Designer</p>
                        <p class="mb-1">There is a lot of exciting stuff going on in the stars above us that make.</p>
                        <module type="social_links" template="skin-1" />
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-6 mb-5 cloneable">
                <div class="d-block d-sm-flex align-items-center      px-4 py-5 h-100">
                    <div class="me-sm-4 mb-5 mb-sm-0 mx-auto mx-sm-0">
                        <div class="w-175 mx-auto">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-7-2.jpg"/>
                            </div>
                        </div>
                    </div>

                    <div class="allow-drop">
                        <h4 class="mb-1">Corey Weber</h4>
                        <p class="mb-3">UI/UX Designer</p>
                        <p class="mb-1">There is a lot of exciting stuff going on in the stars above us that make.</p>
                        <module type="social_links" template="skin-1" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
