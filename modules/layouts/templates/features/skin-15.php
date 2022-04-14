<?php
/*

  type: layout

  name: Feature 15

  position: 15

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-15-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-7 mx-auto">
                <div class="pb-5 allow-drop">
                    <img src="<?php print template_url(); ?>assets/img/layouts/feature-15.jpg" class="  h-100 w-100"/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-5 mx-auto text-center text-lg-start d-flex align-items-center">
                <div>
                    <div class="cloneable allow-drop mb-6">
                        <i class="mdi mdi-hexagon-outline icon-size-32px mb-3 d-inline-block cloneable safe-element"></i>
                        <h5 class="mb-0">The Basics Of Buying A Telescope</h5>

                        <p>Over time, even the most sophisticated, memory packed computer can begin to run slow if we don’t do something to prevent it.</p>
                    </div>

                    <div class="cloneable allow-drop mb-6">
                        <i class="mdi mdi-hexagram-outline icon-size-32px mb-3 d-inline-block cloneable safe-element"></i>
                        <h5 class="mb-0">Asteroids</h5>

                        <p>Being able to foresee an unfortunate fact of life like death, disasters, illnesses, etc. through a dream is very common.</p>
                    </div>

                    <div class="cloneable allow-drop mb-6">
                        <i class="mdi mdi-diamond-outline icon-size-32px mb-3 d-inline-block cloneable safe-element"></i>
                        <h5 class="mb-0">The Amazing Hubble</h5>

                        <p>With so many different ways today to find information online, it can sometimes be hard to know where to go to first.</p>
                    </div>

                    <div class="allow-drop">
                        <module type="btn" button_style="btn-outline-primary   " button_size="btn-sm" text="Learn More"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
