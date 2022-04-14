<?php

/*

type: layout

name: Skin-2

description: Skin-2

*/

?>

<script>mw.lib.require('slick')</script>
<script>
    $(document).ready(function () {
        $('.slickslider', '#<?php echo $params['id']; ?>').slick();
    });
</script>

<div class="slick-arrows-1">
    <div class="slickslider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots": false, "arrows": true}'>
        <?php foreach ($data as $item): ?>
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto">
                    <i class="mdi mdi-format-quote-close icon-size-46px   d-block mb-5"></i>
                    <p class="lead-2"><?php print character_limiter($item['content'], $limit); ?></p>
                    <br/>
                    <?php if ($item['client_picture']): ?>
                        <img src="<?php print thumbnail($item['client_picture'], 150); ?>" class="d-inline mb-4"/>
                    <?php endif; ?>
                    <h6 class=" "><?php print $item['name']; ?></h6>
                    <p><?php print $item['client_role']; ?></p> &nbsp;
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
