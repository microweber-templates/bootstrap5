<?php

/*

type: layout

name: Content 55

position: 55

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-content-skin-55-<?php print $params['id'] ?>" rel="module">
    <div class="container allow-drop">
        <h4 class="mb-5">The Basics Of Buying A Telescope</h4>

        <div class="row nodrop">
            <div class="col-sm-4">
                <ul class="style-1">
                    <li class="cloneable mb-3">Look Up In The Sky</li>
                    <li class="cloneable mb-3">What If They Let You Run The Hubble</li>
                    <li class="cloneable mb-3">The Glossary Of Telescopes</li>
                </ul>
            </div>

            <div class="col-sm-4">
                <ul class="style-1">
                    <li class="cloneable mb-3">The Basics Of Buying A Telescope</li>
                    <li class="cloneable mb-3">Beyond The Naked Eye</li>
                </ul>
            </div>

            <div class="col-sm-4">
                <ul class="style-1">
                    <li class="cloneable mb-3">All users on MySpace will know that there are millions of people out there. Every day besides so many people joining this community, there are many others who will be looking</li>
                </ul>
            </div>
        </div>
    </div>
</section>
