<?php

/*

type: layout

name: Team 3

position: 3

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-team-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <h6 class=" ">Asteroids</h6>
                <p>I’m not really sure how old I was when I got the gift for Christmas, but I remember thinking it was a pretty impressive piece of electronic hardware.</p>
                <br/><br/>
            </div>
        </div>

        <div class="row text-center text-sm-center d-flex justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-8 cloneable">
                <div class="d-block">
                    <div class="img-as-background   square mb-3">
                        <img src="<?php print template_url(); ?>assets/img/layouts/team-3-1.jpg"/>
                    </div>

                    <div class="allow-drop">
                        <h5 class="mb-1">Jesus McLaughlin</h5>
                        <p>UI/UX Designer</p>
                        <module type="social_links" template="skin-1" />
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-8 cloneable">
                <div class="d-block">
                    <div class="img-as-background   square mb-3">
                        <img src="<?php print template_url(); ?>assets/img/layouts/team-3-2.jpg"/>
                    </div>

                    <div class="allow-drop">
                        <h5 class="mb-1">Sally Armstrong</h5>
                        <p>UI/UX Designer</p>
                        <module type="social_links" template="skin-1" />
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-8 cloneable">
                <div class="d-block">
                    <div class="img-as-background   square mb-3">
                        <img src="<?php print template_url(); ?>assets/img/layouts/team-3-3.jpg"/>
                    </div>

                    <div class="allow-drop">
                        <h5 class="mb-1">Bertha Farmer</h5>
                        <p>UI/UX Designer</p>
                        <module type="social_links" template="skin-1" />
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 mb-8 cloneable">
                <div class="d-block">
                    <div class="img-as-background   square mb-3">
                        <img src="<?php print template_url(); ?>assets/img/layouts/team-3-5.jpg"/>
                    </div>

                    <div class="allow-drop">
                        <h5 class="mb-1">Nell Robertson</h5>
                        <p>UI/UX Designer</p>
                        <module type="social_links" template="skin-1" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
