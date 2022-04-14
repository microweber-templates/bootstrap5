<?php
if (isset($slide['primaryText'])) {
    $primaryText = $slide['primaryText'];
}

if (isset($slide['url'])) {
    $url = $slide['url'];
} else {
    $url = 'javascript:;';
}
?>
<div class="slider-background-holder mh-400 d-flex align-items-center square" style="background-image: url('<?php if (isset($slide['images'][0])) { ?><?php print thumbnail($slide['images'][0], $thumb_quality_x, $thumb_quality_y); ?><?php } ?>');" onclick="<?php print $url; ?>" title="<?php echo $primaryText; ?>">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                <?php if (isset($slide['primaryText'])) { ?>
                    <h1><?php echo $primaryText; ?></h1>
                <?php } ?>

                <?php if (isset($slide['secondaryText'])) { ?>
                    <p class="lead mb-4"><?php print $slide['secondaryText']; ?></p>
                <?php } ?>

                <?php if ($slide['seemoreText']): ?>
                    <a class="btn btn-link" href="<?php if (isset($slide['url'])): ?><?php print $slide['url']; ?><?php endif; ?>"><?php print $slide['seemoreText'] ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
