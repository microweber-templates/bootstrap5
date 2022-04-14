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
<div class="mh-550 h-100" style="background-image: url('<?php if (isset($slide['images'][0])) { ?><?php print thumbnail($slide['images'][0], $thumb_quality_x, $thumb_quality_y); ?><?php } ?>');" onclick="<?php print $url; ?>" title="<?php echo $primaryText; ?>"></div>
