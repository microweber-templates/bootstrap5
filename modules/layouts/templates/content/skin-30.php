<?php

/*

type: layout

name: Content 30

position: 30

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-10';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section py-0 edit safe-mode nodrop" field="layout-content-skin-30-<?php print $params['id'] ?>" rel="module" data-parallax-x="true" data-overlay-black="true" data-overlay="2">
    <div class="background-image-holder mh-100vh d-flex align-items-center" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/content-30.jpg')">
        <div class="container <?php print $layout_classes; ?>">
            <div class="row">
                <div class="col-12 col-sm-10 col-lg-8 col-lg-6 allow-drop text-white">
                    <h1 class="mb-3">Make Money Online Through Advertising</h1>
                    <p class="lead-2">Planning to visit Las Vegas or any other vacational resort where casinos are a major portion of their business? I have just the thing for you</p>

                    <div class="row mt-8 nodrop">
                        <div class="col-md-6 allow-drop text-white">
                            <h5>Las Vegas How To Have Non Gambling Related Fun</h5>
                            <p>According to the research firm Frost & Sullivan, the estimated size of the North American </p>
                        </div>

                        <div class="col-md-6 allow-drop text-white">
                            <h5>Stu Unger Rise And Fall Of A Poker Genius</h5>
                            <p>According to the research firm Frost & Sullivan, the estimated size of the North American </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
