<?php
/*

  type: layout

  name: Feature 16

  position: 16

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-16-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row d-flex justify-content-center text-center text-md-start">
            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable p-2">
                <div class="h-100 d-flex flex-column allow-drop">
                    <div class="col-md-3 px-0">
                        <i class="mdi mdi-death-star-variant icon-size-32px mb-4 d-inline-block safe-element cloneable"></i>
                    </div>
                    <h5>Moon Fever</h5>
                    <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system.</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable p-2">
                <div class="h-100 d-flex flex-column allow-drop">
                    <div class="col-md-3 px-0">
                        <i class="mdi mdi-cookie icon-size-32px mb-4 d-inline-block safe-element cloneable"></i>
                    </div>
                    <h5>Telescopes 101</h5>
                    <p>All the rumors have finally died down and many skeptics have tightened their lips, the iPod does support video format now on its fifth generation. While the iPod is not the first to come up with</p>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-4 mb-6 cloneable p-2">
                <div class="h-100 d-flex flex-column allow-drop">
                    <div class="col-md-3 px-0">
                        <i class="mdi mdi-glass-cocktail icon-size-32px mb-4 d-inline-block safe-element cloneable"></i>
                    </div>
                    <h5>The Basics Of Buying A Telescope</h5>
                    <p>Finding the perfect learning tool for Flash is a daunting task to any novice web developer. One can find help in a number of ways through books, friends and private tutors.</p>
                </div>
            </div>
        </div>
    </div>
</section>
