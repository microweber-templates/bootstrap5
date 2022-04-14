<?php

/*

  type: layout
  content_type: static
  name: Layouts - Product Inner
  position: 18
  description: Layouts - Product Inner

*/

?>
<?php include template_dir() . "header.php"; ?>
<div class="main-content edit" data-layout-container rel="content" field="content">
    <?php
    $module_layouts = module_templates('layouts');
    $i=0;
    foreach ($module_layouts as $module) {
        if (strpos($module['layout_file'], 'product-inner/') !== false) {
            $i++;
            print 'Product-Inner skin-'.$i.'<module type="layouts"  template="' . ($module['layout_file']) . '" template_order_number="'.$i.'" id="mod-' . md5($module['name']) . '" />';
        }
    }
    ?>
</div>
<?php include template_dir() . "footer.php"; ?>
