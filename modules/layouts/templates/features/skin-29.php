<?php

/*

type: layout

name: Feature 29

position: 29

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


<section class="section    <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-29-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-md-10 col-lg-8 col-lg-6 mx-auto allow-drop">
                <h4>Telescopes 101</h4>
                <p>Stu Unger is one of the biggest superstars to have <br />immerged from the professional poker world. </p>

                <div class="nodrop text-start text-left mt-7">
                    <ul class="ul no-style">
                        <li class="mb-3 cloneable bg-body hover-bg-primary hover-text-primary   d-flex align-items-center py-3 px-3">
                            <i class="mdi mdi-check-circle icon-size-30px safe-element me-3"></i>  Advertise Advertise Advertise
                        </li>
                        <li class="mb-3 cloneable bg-body hover-bg-primary hover-text-primary   d-flex align-items-center py-3 px-3">
                            <i class="mdi mdi-check-circle icon-size-30px safe-element me-3"></i>  Advertising Outdoors
                        </li>
                        <li class="mb-3 cloneable bg-body hover-bg-primary hover-text-primary   d-flex align-items-center py-3 px-3">
                            <i class="mdi mdi-check-circle icon-size-30px safe-element me-3"></i>  Illustration In Marketing Materials
                        </li>
                        <li class="mb-3 cloneable bg-body hover-bg-primary hover-text-primary   d-flex align-items-center py-3 px-3">
                            <i class="mdi mdi-check-circle icon-size-30px safe-element me-3"></i>  Internet Advertising What Went Wrong
                        </li>
                        <li class="mb-3 cloneable bg-body hover-bg-primary hover-text-primary   d-flex align-items-center py-3 px-3">
                            <i class="mdi mdi-check-circle icon-size-30px safe-element me-3"></i>  Advertising Internet Online Opportunities To Explore
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="allow-drop text-center">
            <br/><br/>
            <module type="btn" button_style="btn-primary   " button_size="btn-md" text="Learn More"/>
        </div>
    </div>
</section>
