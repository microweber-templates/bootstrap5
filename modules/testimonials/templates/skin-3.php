<?php

/*

type: layout

name: Skin-3

description: Skin-3

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
                    <p class="lead-2"><?php print character_limiter($item['content'], $limit); ?></p>
                    <br/>
                    <h5><?php print $item['name']; ?></h5>
                    <p><?php print $item['client_role']; ?></p> &nbsp;
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
