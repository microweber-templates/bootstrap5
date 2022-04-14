<?php

/*

type: layout

name: Content 48

position: 48

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-48-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 mx-auto">
                <div class="border-bottom py-3 cloneable">
                    <div class="row">
                        <div class="col text-center text-md-start allow-drop">
                            <h4>The Glossary Of Telescopes</h4>

                            <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.</p>
                        </div>

                        <div class="col-12 col-md-auto text-center ps-5 align-self-center cloneable">
                            <module type="btn" text="Learn More" button_style="btn-link"/>
                        </div>
                    </div>
                </div>

                <div class="border-bottom py-3 cloneable">
                    <div class="row">
                        <div class="col text-center text-md-start allow-drop">
                            <h4>Radio Astronomy</h4>

                            <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.</p>
                        </div>

                        <div class="col-12 col-md-auto text-center ps-5 align-self-center cloneable">
                            <module type="btn" text="Learn More" button_style="btn-link"/>
                        </div>
                    </div>
                </div>

                <div class="border-bottom py-3 cloneable">
                    <div class="row">
                        <div class="col text-center text-md-start allow-drop">
                            <h4>Telescopes 101</h4>

                            <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.</p>
                        </div>

                        <div class="col-12 col-md-auto text-center ps-5 align-self-center cloneable">
                            <module type="btn" text="Learn More" button_style="btn-link"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
