<?php

/*

type: layout

name: Content 3

position: 3

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 allow-drop">
                <div class="text-center">
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-3.jpg" class=" "/>
                    <br /><br /><br />
                    <module type="btn" text="Button" button_style="btn-primary" button_size="btn-md px-5"/>
                    <br /><br />
                </div>
                <p class="small">If you are in the market for a computer, there are a number of factors to consider. <br/>Will it be used for your home, your office or perhaps even</p>

            </div>

            <div class="col-12 col-lg-6 allow-drop">
                <div class="col-12 my-4 nodrop cloneable">
                    <h5>A Guide To Mri Scans</h5>
                    <p>Many conventional colleges and universities are now offering online DVD repair courses, which are the exact same as those</p>
                </div>
                <div class="col-12 my-4 nodrop cloneable">
                    <h5>5 Tips For Offshore Software Development</h5>
                    <p>While it was just a TV show, that little speech at the beginning of the original Star Trek show really did do a good job of capturing our feelings about space. It is those feelings that drive our love of astronomy.</p>
                </div>
                <div class="col-12 my-4 nodrop cloneable">
                    <h5>Protective Preventative Maintenance</h5>
                    <p>So you have your new digital camera and clicking away.</p>
                </div>
            </div>
        </div>
    </div>
</section>
