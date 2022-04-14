<?php

/*

type: layout

name: Default

description: Default

*/
?>

<?php
if ($style == 'btn-default' OR $style == '') {
    $style = 'btn-primary';
} ?>
<?php if ($action == 'submit'): ?>
    <button type="submit" id="<?php print $btn_id ?>" class="btn <?php print $style . ' ' . $size; ?>">
        <?php print $text; ?>
    </button>
<?php else: ?>
    <a id="<?php print $btn_id ?>" href="<?php print $url; ?>" <?php if ($blank) {
        print ' target="_blank" ';
    } ?> class="btn <?php print $style . ' ' . $size; ?>">

        <?php print $text; ?>
    </a>
<?php endif; ?>
