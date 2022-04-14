<?php

/*

type: layout

name: Skin-15

description: Skin-15

*/

?>

<?php

/*

type: layout

name: Skin-5

description: Skin-5

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
    .slick-dotted.slick-slider {
        margin-bottom: 0px;
    }
</style>
<div class="slick-arrows-1">
    <div class="slickslider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": true, "arrows": true}'>
        <?php foreach ($data as $item): ?>
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto">
                    <p class="lead-2"><?php print character_limiter($item['content'], $limit); ?></p>
                    <br/>
                    <br/>
                    <div class="text-center text-sm-start mb-9">
                        <div class="d-block d-sm-flex align-items-center mx-auto justify-content-center">
                            <?php if ($item['client_picture']): ?>
                                <div class="me-sm-4 mb-5 mb-sm-0 mx-auto mx-sm-0">
                                    <div class="w-80 mx-auto">
                                        <div class="img-as-background rounded-circle square">
                                            <img src="<?php print thumbnail($item['client_picture'], 120); ?>">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div>
                                <h5 class="mb-1"><?php print $item['name']; ?></h5>
                                <p class="mb-0"><?php print $item['client_role']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

