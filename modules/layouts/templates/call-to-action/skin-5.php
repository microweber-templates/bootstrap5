<?php

/*

type: layout

name: Call to action 5

position: 5

categories: Call to Action

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

<section class="section form-control-outline-dark <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-call-to-action-skin-5-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-lg-7 mx-auto text-center allow-drop">
                <h1>Party Jokes Startling But Unnecessary</h1>
                <br/>
                <p class="lead">Once the printer ink runs dry it has to be replaced with another inkjet cartridge. There are many reputed companies like Canon, Epson, Del</p>
            </div>
        </div>

        <div class="allow-drop"><br/><br/><br/></div>

        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 col-lg-7 mx-auto text-center allow-drop">
                <module type="contact_form" template="subscribe-7"/>
            </div>
        </div>
    </div>
</section>
