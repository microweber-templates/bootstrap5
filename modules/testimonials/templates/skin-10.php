<?php

/*

type: layout

name: Skin-10

description: Skin-10

*/

?>

<script>mw.lib.require('slick')</script>
<script>
    $(document).ready(function () {
        $('.slickslider', '#<?php echo $params['id']; ?>').slick({
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>

<style>
    <?php echo '#' . $params['id'] . ' '; ?>
    .list-inline {
        margin: 0;
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .list-inline li {
        margin: 0 3px;
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
    <div class="slickslider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "dots": false, "arrows": true}'>
        <?php foreach ($data as $item): ?>
            <div class="border   text-center mx-3 h-100 p-5">
                <?php if ($item['client_picture']): ?>
                    <div class="w-125 mx-auto my-4">
                        <div class="img-as-background rounded-circle square">
                            <img src="<?php print thumbnail($item['client_picture'], 120); ?>" class="d-block"/>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="my-5">
                    <h5 class="mb-0"><?php print $item['name']; ?></h5>
                    <h6 class="mb-0"><?php print $item['client_company']; ?></h6>
                </div>

                <div class="element-hr mx-auto my-5"></div>
                <p><?php print character_limiter($item['content'], $limit); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
