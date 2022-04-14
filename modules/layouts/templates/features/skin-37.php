<?php

/*

type: layout

name: Feature 37

position: 37

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-feature-skin-37-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row mh-650">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto text-center text-sm-start d-flex align-items-center mb-5">
                <div class="container-fluid-left-col-in-container">
                    <div class="allow-drop pe-lg-5">
                        <h1>Telescopes 101</h1>
                        <p class="lead">It is more likely that it will have to wait till the end of George Bushes term in office and then get an amendment to the law that reverses only gambling ban part of the law</p>
                        <br/>

                        <div class="row py-4 text-center text-sm-start d-flex justify-content-center justify-content-lg-between nodrop">
                            <div class="col-sm-12 col-md-12 mb-6 cloneable px-0">
                                <div class="d-block d-sm-flex align-items-start h-100">
                                    <div class="me-sm-4 mb-3 mb-sm-0 mx-auto mx-sm-0 w-80 maxw-80 icon-size-32px">
                                        <div class="square d-flex align-items-center justify-content-center">
                                            <i class="mdi mdi-speedometer position-absolute safe-element"></i>
                                        </div>
                                    </div>

                                    <div class="allow-drop">
                                        <h5>Sony Laptops</h5>
                                        <p>If you’re looking for the latest in wireless headphones for your enjoyment</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 mb-6 cloneable px-0">
                                <div class="d-block d-sm-flex align-items-start h-100">
                                    <div class="me-sm-4 mb-3 mb-sm-0 mx-auto mx-sm-0 w-80 maxw-80 icon-size-32px">
                                        <div class="square d-flex align-items-center justify-content-center">
                                            <i class="mdi mdi-lightbulb-on position-absolute safe-element"></i>
                                        </div>
                                    </div>

                                    <div class="allow-drop">
                                        <h5>Computer Wery Useful Tips</h5>
                                        <p>Plantronics with its GN Netcom wireless headset creates the next generation</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <module type="btn" button_style="btn-outline-primary" button_size="btn-md px-5" text="Learn More"/>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto background-image-holder mh-400 mb-5" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/feature-22.jpg');"></div>


        </div>
    </div>
</section>
