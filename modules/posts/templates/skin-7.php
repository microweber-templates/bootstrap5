<?php

/*

type: layout

name: Posts 7

description: Posts 7

*/
?>

<div class="row py-4 blog-posts-7">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <?php $categories = content_categories($item['id']);

            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= '<small class="text-dark bg-body px-2 py-1   font-weight-bold d-inline-block mb-2 me-2  ">' . $category['title'] . '</small> ';
                }
            }
            ?>

            <div class="mx-auto col-sm-10 mx-md-0 col-md-6 col-lg-6 mb-5" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="border   overflow-hidden h-100 d-flex flex-column bg-body hover-  ">
                    <a href="<?php print $item['link'] ?>" class="d-block position-relative">
                        <div class="position-absolute p-4" style="z-index: 9;"><?php echo $itemCats; ?></div>
                        <div class="img-as-background square-75">
                            <img src="<?php print thumbnail($item['image'], 600, 600); ?>"/>
                        </div>
                    </a>
                    <div class="d-flex flex-column h-100 px-5 pt-3 pb-5">
                        <small class="mb-3 mt-3 d-block  "><?php echo date('d M Y', strtotime($item['created_at'])); ?></small>

                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                            <a href="<?php print $item['link'] ?>" class="text-dark text-decoration-none"><h3 class="mb-2"><?php print $item['title'] ?></h3></a>
                        <?php endif; ?>

<!--                        <div class="d-flex align-items-center justify-content-between mt-md-auto mt-5">-->
<!--                            --><?php //if (isset($item['created_by'])): ?>
<!--                                --><?php
//                                $user = get_user_by_id($item['created_by']);
//                                ?>
<!---->
<!--                                <div class="d-flex d-sm-flex align-items-center mt-3">-->
<!--                                    --><?php //if (isset($user['thumbnail'])): ?>
<!--                                        <div class="me-3">-->
<!--                                            <div class="w-40">-->
<!--                                                <div class="img-as-background rounded-circle square">-->
<!--                                                    <img src="--><?php //echo thumbnail($user['thumbnail'], 80, 80); ?><!--"/>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    --><?php //endif; ?>
<!---->
<!--                                    <div>-->
<!--                                        <p class="mb-1 font-weight-bold d-block">-->
<!--                                            --><?php //if (isset($user['first_name'])): ?><!----><?php //echo $user['first_name']; ?><!----><?php //endif; ?><!--&nbsp;-->
<!--                                            --><?php //if (isset($user['last_name'])): ?><!----><?php //echo $user['last_name']; ?><!----><?php //endif; ?>
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //endif; ?>

<!--                            <div class="d-flex align-items-center">-->
<!--                                <div class="d-flex align-items-center me-2"><i class="mw-micon-Eye-2 icon-size-24px text-muted me-2"></i>-->
<!--                                    <module type="site_stats/view_count" content-id="10"/>-->
<!--                                </div>-->
<!--                                <div class="d-flex align-items-center me-2"><i class="mdi mdi-forum icon-size-24px text-muted me-2"></i>-->
<!--                                    <module type="comments/comments_count" content-id="--><?php //echo $item['id']; ?><!--" class="d-inline"/>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
