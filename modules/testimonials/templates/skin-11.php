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
        $('.slickslider', '#<?php echo $params['id']; ?>').slick({
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
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
    .slick-track {
        display: flex !important;
    }

    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-dots {
        position: relative;
        bottom: -30px;
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
    <div class="slickslider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "dots": true, "arrows": false}'>
        <?php foreach ($data as $item): ?>
            <div class="border hover-border-color-primary   mx-3 h-100 p-5">
                <div class="row">
                    <?php if ($item['client_picture']): ?>
                        <div class="col-auto">
                            <div class="w-80 mx-auto">
                                <div class="img-as-background rounded-circle square">
                                    <img src="<?php print thumbnail($item['client_picture'], 120); ?>" class="d-block"/>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col">
                        <i class="mdi mdi-format-quote-close icon-size-46px   mb-3 d-block safe-element"></i>

                        <p><?php print character_limiter($item['content'], $limit); ?></p>

                        <div class="row d-flex align-items-center justify-content-between mt-3">
                            <div class="col">
                                <h6 class="mb-0"><?php print $item['name']; ?></h6>
                            </div>
                            <div class="col-auto text-end text-right">
                                <module type="social_links" template="skin-4"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
