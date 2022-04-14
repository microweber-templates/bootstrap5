<?php

/*

type: layout
content_type: static
name: Layouts - Misc
position: 11
description: Layouts - Misc

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" data-layout-container rel="content" field="content">
<?php
    $module_layouts = module_templates('layouts');
    $i=0;
    foreach ($module_layouts as $module) {
        if (strpos($module['layout_file'], 'misc/') !== false) {
            $i++;
            print 'Misc skin-'.$i.'<module type="layouts"  template="' . ($module['layout_file']) . '" template_order_number="'.$i.'" id="mod-' . md5($module['name']) . '" />';
        }
    }
    ?></div>

<?php include template_dir() . "footer.php"; ?>
