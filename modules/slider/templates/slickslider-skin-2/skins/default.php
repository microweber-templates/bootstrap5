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

<div class="mb-5" onclick="<?php print $url; ?>">
    <div class="border   overflow-hidden h-350 d-flex flex-column position-relative background-image-holder mx-3" style="background-image: url('<?php if (isset($slide['images'][0])) { ?><?php print thumbnail($slide['images'][0], $thumb_quality_x, $thumb_quality_y); ?><?php } ?>');">
    </div>
        <div class="text-center py-2">
            <h5 class="mb-2"><?php echo $primaryText; ?></h5>
        </div>
</div>
