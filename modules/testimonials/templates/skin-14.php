<?php

/*

type: layout

name: Skin-11

description: Skin-11

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
    .slick-track {
        display: flex !important;
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-dots {
        position: relative;
        bottom: -30px;
    }

    @media screen and (min-width: 768px) {
    <?php echo '#' . $params['id'] . ' '; ?>
        .avatar-holder {
            margin-left: -40% !important;
        }
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-slide {
        height: inherit !important;
    }

    @media screen and (min-width: 1920px) {
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
            <div class="row">
                <div class="col-12 col-md-9 offset-md-3 col-lg-7 offset-lg-4">
                    <div class="border hover-border-color-primary   p-5">
                        <div class="d-block d-md-flex text-center text-md-start">
                            <?php if ($item['client_picture']): ?>
                                <div class="mw-300 w-300 avatar-holder mx-auto me-md-5">
                                    <div class="img-as-background   h-200">
                                        <img src="<?php print thumbnail($item['client_picture'], 300); ?>" class="d-block"/>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div>
                                <p class="lead"><?php print character_limiter($item['content'], $limit); ?></p>

                                <div class="row d-flex align-items-center justify-content-between mt-3">
                                    <div class="col">
                                        <h6 class="mb-0"><?php print $item['name']; ?></h6>
                                        <p class="mb-0"><?php print $item['client_role']; ?></p>
                                    </div>
                                    <div class="col-auto text-end text-right">
                                        <module type="social_links" template="skin-4"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
