<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 1
  description: Home
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" data-layout-container rel="content" field="content">
    <module type="layouts" template="content/skin-1"/>
    <module type="layouts" template="content/skin-2"/>
    <module type="layouts" template="content/skin-3"/>
    <module type="layouts" template="content/skin-4"/>
</div>

<?php include template_dir() . "footer.php"; ?>
