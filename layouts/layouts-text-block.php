<?php

/*

  type: layout
  content_type: static
  name: Layouts - Text block
  position: 11
  description: Layouts - Text block

*/

?>
<?php include template_dir() . "header.php"; ?>
<div class="main-content edit" data-layout-container rel="content" field="content">
    <?php
    $module_layouts = module_templates('layouts');
    $i=0;
    foreach ($module_layouts as $module) {
        if (strpos($module['layout_file'], 'text-block/') !== false) {
            $i++;
            print 'Text block skin-'.$i.'<module type="layouts"  template="' . ($module['layout_file']) . '" template_order_number="'.$i.'" id="mod-' . md5($module['name']) . '" />';
        }
    }
    ?>
</div>

<?php include template_dir() . "footer.php"; ?>
