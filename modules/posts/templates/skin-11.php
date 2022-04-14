<?php

/*

type: layout

name: Posts 11

description: Posts 11

*/
?>

<div class="row py-4">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <?php $categories = content_categories($item['id']);

            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= '<small class="text-outline-primary font-weight-bold d-inline-block mb-2 me-2  ">' . $category['title'] . '</small> ';
                }
            }
            ?>

            <div class="mx-auto col-sm-10 col-md-10 col-lg-8 mb-7" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="text-center">
                    <div class="mb-3">
                        <small class=" "><?php echo date('d M y', strtotime($item['created_at'])); ?></small>
                    </div>

                    <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                        <a href="<?php print $item['link'] ?>" class="btn btn-link text-dark"><h1 class="mb-2"><?php print $item['title'] ?></h1></a>
                    <?php endif; ?>

                    <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                        <p class="lead"><?php echo $item['description'];?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
