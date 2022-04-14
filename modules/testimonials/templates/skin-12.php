<?php

/*

type: layout

name: Skin-12

description: Skin-12

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

    <?php echo '#' . $params['id'] . ' '; ?>
    .slick-slide {
        height: inherit !important;
    }

</style>


<div class="slick-arrows-2">
    <div class="slickslider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": false, "arrows": true}'>
        <?php foreach ($data as $item): ?>
            <div class="row text-center">
                <div class="col-11 col-sm-10 col-lg-8 col-lg-5 mx-auto">
                    <div class="border bg-body hover-border-color-primary   mx-3 h-100 p-5">
                        <?php if ($item['client_picture']): ?>
                            <div class="w-80 mx-auto my-4">
                                <div class="img-as-background rounded-circle square">
                                    <img src="<?php print thumbnail($item['client_picture'], 120); ?>" class="d-block"/>
                                </div>
                            </div>
                        <?php endif; ?>

                        <h5 class="mb-0"><?php print $item['name']; ?></h5>
                        <p><?php print $item['client_role']; ?></p>

                        <i class="mdi mdi-format-quote-close icon-size-46px   my-3 d-block safe-element"></i>

                        <p><?php print character_limiter($item['content'], $limit); ?></p>

                        <module type="social_links" template="skin-5"/>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
