<?php
/*

  type: layout

  name: Posts 10

  description: Posts 10

 */
?>

<div class="row py-4 blog-posts-10">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $key => $item): ?>
            <?php $categories = content_categories($item['id']);

            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= '<small class="text-dark bg-body px-2 py-1   font-weight-bold d-inline-block mb-2 me-2  ">' . $category['title'] . '</small> ';
                }
            }
            ?>

            <?php $itemData = content_data($item['id']); ?>
            <?php if ($key == 0): ?>
                <div class="col-lg-6 col-lg-6" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                    <div class="post-holder mb-4">
                        <div class="h-100 d-flex flex-column">
                            <a href="<?php print $item['link'] ?>" class="btn btn-link d-block position-relative">
                                <div class="position-absolute p-4" style="z-index: 9;"><?php echo $itemCats; ?></div>

                                <div class="img-as-background square  ">
                                    <img src="<?php print thumbnail($item['image'], 600, 600); ?>" class=" "/>
                                </div>
                            </a>

                            <div class="pt-4 pb-3">
                                <small class="mb-2 d-block"><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>
                                <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                    <a href="<?php print $item['link'] ?>" class="text-dark text-decoration-none mb-2"><h3><?php print $item['title'] ?></h3></a>
                                <?php endif; ?>

                                <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                    <p class=""><?php print $item['description'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <div class="col-lg-6 col-lg-6">
            <div class="row">
                <?php foreach ($data as $key => $item): ?>
                    <?php $itemData = content_data($item['id']); ?>
                    <?php if ($key == 1 or $key == 2 or $key == 3 or $key == 4): ?>
                        <div class="col-md-6 post-holder mb-2">
                            <div class="h-100 d-flex flex-column">
                                <a href="<?php print $item['link'] ?>" class="btn btn-link d-block position-relative">
                                    <div class="position-absolute"><?php echo $itemCats; ?></div>

                                    <div class="img-as-background square-75  ">
                                        <img src="<?php print thumbnail($item['image'], 850, 850); ?>" class=" "/>
                                    </div>
                                </a>

                                <div class="pt-4 pb-3">
                                    <small class="mb-2 d-block"><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>
                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                        <a href="<?php print $item['link'] ?>" class="btn btn-link text-dark mb-2"><h4 class="text-start text-left"><?php print $item['title'] ?></h4></a>
                                    <?php endif; ?>

                                    <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                        <p class=""><?php print $item['description'] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
