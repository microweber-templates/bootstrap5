<?php

/*

type: layout

name: Content 28

position: 28

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


<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-28-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto pb-5 text-center d-flex align-items-center">
                <div class="allow-drop">
                    <h5 class="mb-4 font-weight-normal">Stu Unger Rise And Fall Of A Poker Genius</h5>
                    <h1 class="mb-5">Myspace Layouts The Missing Element</h1>
                    <img src="<?php print template_url(); ?>assets/img/layouts/content-28.jpg" class=" "/>

                    <br/>
                    <br/>
                    <br/>
                    <p class="lead">Over 92% of computers are infected with Adware and spyware. Such software is rarely accompanied by uninstall utility and even when it is it almost always leaves broken Windows Registry keys behind it. Even if you have an anti-spyware tool your Windows Registry might be broken – developers of those tools are focused on removing Adware and spyware functionality, not every trace</p>

                    <module type="btn" text="Learn More" button_style="btn-link" button_size=""/>
                </div>
            </div>
        </div>
    </div>
</section>
