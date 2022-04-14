<?php

/*

type: layout
content_type: static
name: Layouts - Grids
position: 20
description: Layouts - Grids

*/


?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" data-layout-container rel="content" field="content">
<?php
    $module_layouts = module_templates('layouts');
    foreach ($module_layouts as $module) {
        if (strpos($module['layout_file'], 'grids/') !== false) {
            print '<module type="layouts"  template="' . ($module['layout_file']) . '" id="mod-' . md5($module['name']) . '" />';
        }
    }
    ?>
 
</div>

<?php include template_dir() . "footer.php"; ?>
