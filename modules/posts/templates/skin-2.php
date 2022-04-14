<?php

/*

type: layout

name: Posts 2

description: Posts 2

*/
?>

<div class="blog-posts-2">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <?php $categories = content_categories($item['id']);

            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= '<p class="text-dark font-weight-bold d-block mb-2  ">' . $category['title'] . '</p> ';
                }
            }
            ?>
            <hr class="thin"/>
            <div class="row pt-3 mb-0" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="col-lg-3">
                    <?php echo $itemCats; ?>
                    <small class="mb-2 d-block"><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>
                </div>
                <div class="col-lg-7">
                    <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                        <a href="<?php print $item['link'] ?>" class="text-dark"><h3><?php print $item['title'] ?></h3></a>
                    <?php endif; ?>
                    <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                        <p class="lead"><?php print $item['description'] ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <hr class="thin"/>
    <?php endif; ?>
</div>

<div class="text-center">
    <a href="#" class="btn btn-outline-primary   ">Learn More</a>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
