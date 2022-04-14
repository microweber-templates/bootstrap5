<?php
/*

type: layout

name: Content 67

position: 67

categories: Content

*/
?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'fluid-p-t';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'fluid-p-b';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section   <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-content-67-<?php print $params['id'] ?>" rel="module">
    <div class="container text-center allow-drop">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto">
                <img class="safe-element" style="max-height: 40px; max-width: 500px;"src="<?php print template_url(); ?>assets/img/decoration-2.svg"/>
                <h2 class="my-md-5 my-3">Our Best Moments</h2>
                <p style="text-align-last: center; text-align: justify !important;">We are grateful to God and to destiny for meeting you in this life. My love, thank you for those beautiful moments we shared together. Rejoice us!</p>
                <br><br>
                <module type="btn" button_text="Learn more" class="inline-block cloneable h-m-t"/>
            </div>
        </div>
    </div>
</section>











