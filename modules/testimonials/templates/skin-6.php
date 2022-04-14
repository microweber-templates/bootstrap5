<?php

/*

type: layout

name: Skin-6

description: Skin-6

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
    .slick-dots {
        position: relative;
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
    <div class="slickslider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "dots": true, "arrows": false}'>
        <?php foreach ($data as $item): ?>
            <div class="row text-center mb-5">
                <div class="col-12 col-lg-11 mx-auto">
                    <?php if ($item['client_picture']): ?>
                        <div class="w-80 mx-auto mb-4">
                            <div class="img-as-background rounded-circle square">
                                <img src="<?php print thumbnail($item['client_picture'], 120); ?>">
                            </div>
                        </div>
                    <?php endif; ?>

                    <p class="lead"><?php print character_limiter($item['content'], $limit); ?></p>
                    <br/>
                    <h6 class="mb-1"><?php print $item['name']; ?></h6>
                    <p><?php print $item['client_role']; ?></p> &nbsp;
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
