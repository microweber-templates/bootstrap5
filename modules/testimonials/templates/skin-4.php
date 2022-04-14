<?php

/*

type: layout

name: Skin-4

description: Skin-4

*/

?>

<script>mw.lib.require('slick')</script>
<script>
    $(document).ready(function () {
        $('.slickslider', '#<?php echo $params['id']; ?>').slick();
    });
</script>

<style>
    <?php echo '#' . $params['id'] . ' '; ?> .slick-dotted.slick-slider {
        margin-bottom: 0px;
    }
    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-dots {
        width: 91.6666666667%;
        margin: 0 auto;
        right: 0;
        text-align: left;
        padding-left: 3rem;
    }

    @media screen and (max-width: 1199px) {
    <?php echo '#' . $params['id'] . ' '; ?>
        .slick-dots {
            width: 100%;
            padding-left: 0;
        }
    }
</style>

<div class="slick-arrows-1">
    <div class="slickslider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": true, "arrows": false}'>
        <?php foreach ($data as $item): ?>
            <div class="row">
                <div class="col-12 col-lg-12 col-lg-10 mx-auto">
                    <i class="mdi mdi-format-quote-close icon-size-46px   d-block mb-5"></i>
                    <div class="px-5">
                        <p class="lead-3"><?php print character_limiter($item['content'], $limit); ?></p>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-lg-11 mx-auto">
                            <div class="row">
                                <div class="col-6 text-start text-left">

                                </div>
                                <div class="col-6 text-end text-right">
                                    <h6 class=" "><?php print $item['name']; ?></h6>
                                    <p><?php print $item['client_role']; ?></p> &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
