<?php

/*

type: layout

name: Team 14

position: 14

categories: Team

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-team-skin-14-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 mx-auto">
                <div class="row d-flex justify-content-center justify-content-lg-between">
                    <div class="col-sm-12 col-lg-6 mx-auto mb-3 cloneable">
                        <div class="d-block">
                            <div class="img-as-background   square mb-3">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-14-1.jpg"/>
                            </div>

                            <div class="allow-drop">
                                <h3 class="mb-1">Jesus McLaughlin</h3>

                                <div class="row d-flex align-items-center justify-content-between nodrop">
                                    <div class="col">
                                        <p class="mb-0">UI/UX Designer</p>
                                    </div>
                                    <div class="col-auto">
                                        <module type="social_links" template="skin-1"/>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <p>Meteoroid is actually a small piece of space rubble, usually dust or small rocks that come from either a comet or the break up of an asteroid in space and that eventually plummets toward the earth. We say “toward the earth” because the lights you see are the friction of the atmosphere burning up those small space tidbits and creating.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-6 mx-auto mb-3 cloneable">
                        <div class="d-block">
                            <div class="img-as-background   square mb-3">
                                <img src="<?php print template_url(); ?>assets/img/layouts/team-14-2.jpg"/>
                            </div>

                            <div class="allow-drop">
                                <h3 class="mb-1">Jeremiah Ballard</h3>

                                <div class="row d-flex align-items-center justify-content-between nodrop">
                                    <div class="col">
                                        <p class="mb-0">UI/UX Designer</p>
                                    </div>
                                    <div class="col-auto">
                                        <module type="social_links" template="skin-1"/>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <p>Meteoroid is actually a small piece of space rubble, usually dust or small rocks that come from either a comet or the break up of an asteroid in space and that eventually plummets toward the earth. We say “toward the earth” because the lights you see are the friction of the atmosphere burning up those small space tidbits and creating.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
