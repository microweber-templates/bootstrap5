<?php

/*

type: layout

name: Skin-13

description: Skin-13

*/

?>

<script>mw.lib.require('slick')</script>
<script>
    $(document).ready(function () {
        $('.slickslider', '#<?php echo $params['id']; ?>').slick();
    });
</script>

<style>
    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-dots {
        position: relative;
        bottom: 0px;
    }

    @media screen and (min-width: 992px) {
    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrow.slick-prev {
            left: -60px;
        }

    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-arrow.slick-next {
            right: -60px;
        }
    }
</style>

<div class="slick-arrows-1">
    <div class="slickslider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": true, "arrows": false}'>
        <?php foreach ($data as $item): ?>
            <div class="row text-center text-lg-start d-md-flex justify-content-center justify-content-lg-between align-items-center">
                <div class="col-12 col-sm-8 col-lg-7 col-lg-6">
                    <h3><?php _lang('Reviews', 'template/big'); ?></h3>
                    <hr class="thin my-6"/>
                    <p class="lead"><?php print character_limiter($item['content'], $limit); ?></p>
                </div>

                <div class="col-12 col-sm-8 col-lg-5 text-center">
                    <?php if ($item['client_picture']): ?>
                        <div class="w-250 mx-auto mb-4">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print thumbnail($item['client_picture'], 250); ?>">
                            </div>
                        </div>
                    <?php endif; ?>

                    <h5 class="mb-1"><?php print $item['name']; ?></h5>
                    <p><?php print $item['client_role']; ?></p> &nbsp;
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
