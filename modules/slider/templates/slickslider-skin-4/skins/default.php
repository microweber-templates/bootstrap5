<?php
if (isset($slide['primaryText']) AND $slide['primaryText'] == '' OR isset($slide['secondaryText']) AND $slide['secondaryText'] == '') {
    $imgSlider = true;
} else {
    $imgSlider = false;
}
?>

<?php
if (isset($slide['textAlign'])) {
    $textAlign = $slide['textAlign'];
}
if (isset($slide['textLargeAlign'])) {
    $textLargeAlign = $slide['textLargeAlign'];
}
if (isset($slide['primaryText'])) {
    $primaryText = $slide['primaryText'];
}
if (isset($slide['primaryTextColor'])) {
    $primaryTextColor = $slide['primaryTextColor'];
}
if (isset($slide['primaryTextStyle'])) {
    $primaryTextStyle = $slide['primaryTextStyle'];
}
if (isset($slide['primaryTextWeight'])) {
    $primaryTextWeight = $slide['primaryTextWeight'];
}
if (isset($slide['secondaryText'])) {
    $secondaryText = $slide['secondaryText'];
}
if (isset($slide['secondaryTextColor'])) {
    $secondaryTextColor = $slide['secondaryTextColor'];
}
if (isset($slide['secondaryTextStyle'])) {
    $secondaryTextStyle = $slide['secondaryTextStyle'];
}
if (isset($slide['secondaryTextWeight'])) {
    $secondaryTextWeight = $slide['secondaryTextWeight'];
}
if (isset($slide['reverseOrderText'])) {
    $sreverseOrderText = $slide['reverseOrderText'];
}
if (isset($slide['textPosition'])) {
    $textPosition = $slide['textPosition'];
}
if (isset($slide['textLargePosition'])) {
    $textLargePosition = $slide['textLargePosition'];
}
if (isset($slide['imgPosition'])) {
    $imgPosition = $slide['imgPosition'];
}
if (isset($slide['imgMainOrder'])) {
    $imgMainOrder = $slide['imgMainOrder'];
}
if (isset($slide['imgLargeOrder'])) {
    $imgLargeOrder = $slide['imgLargeOrder'];
}
if (isset($slide['backgroundOverlay'])) {
    $backgroundOverlay = $slide['backgroundOverlay'];
}
if (isset($slide['backgroundColor'])) {
    $backgroundColor = $slide['backgroundColor'];
}
if (isset($slide['backgroundRepeat'])) {
    $backgroundRepeat = $slide['backgroundRepeat'];
}
if (isset($slide['backgroundPosition'])) {
    $backgroundPosition = $slide['backgroundPosition'];
}
if (isset($slide['backgroundLargePosition'])) {
    $backgroundPosition = $slide['backgroundLargePosition'];
}
if (isset($slide['backgroundSize'])) {
    $backgroundSize = $slide['backgroundSize'];
}
if (isset($slide['backgroundLargeSize'])) {
    $backgroundLargeSize = $slide['backgroundLargeSize'];
}
if (isset($slide['url'])) {
    $url = $slide['url'];
} else {
    $url = 'javascript:;';
}
if (isset($slide['buttonStyle'])) {
    $buttonStyle = $slide['buttonStyle'];
}
if (isset($slide['buttonSize'])) {
    $buttonSize = $slide['buttonSize'];
}
?>

<?php //dd($slide) ?>
<div class="gallery__slide slider__background-holder d-flex align-items-center <?php if ($imgSlider): ?> slider__img-slider <?php else: ?> slider__text-slider <?php endif; ?> <?php if (isset($slide['backgroundOverlay']) AND $slide['backgroundOverlay'] != ''): ?><?php print $slide['backgroundOverlay']; ?><?php endif; ?> <?php if (isset($slide['backgroundRepeat']) AND $slide['backgroundRepeat'] != ''): ?><?php print $slide['backgroundRepeat']; ?><?php endif; ?> <?php if (isset($slide['backgroundPosition']) AND $slide['backgroundPosition'] != ''): ?><?php print $slide['backgroundPosition']; ?><?php endif; ?> <?php if (isset($slide['backgroundLargePosition']) AND $slide['backgroundLargePosition'] != ''): ?><?php print $slide['backgroundLargePosition']; ?><?php endif; ?> <?php if (isset($slide['backgroundSize']) AND $slide['backgroundSize'] != ''): ?><?php print $slide['backgroundSize']; ?><?php endif; ?> <?php if (isset($slide['backgroundLargeSize']) AND $slide['backgroundLargeSize'] != ''): ?><?php print $slide['backgroundLargeSize']; ?><?php endif; ?>" style="<?php if (isset($slide['images'][0])): ?> background-image: url('<?php print ($slide['images'][0]); ?>');<?php endif; ?> <?php if (isset($slide['backgroundColor'])): ?> background-color:<?php print $slide['backgroundColor']; ?>;<?php endif; ?>">

    <?php if (isset($slide['primaryText']) and $slide['primaryText'] == '' and isset($slide['secondaryText']) and $slide['secondaryText'] == ''): ?>
        <?php if (isset($slide['url'])): ?><a href="<?php print $slide['url']; ?>" class="fullscreen-link" style="pointer-events: none;"></a>
    <?php endif; ?>


    <?php else: ?>
        <div class="info-slider-holder container <?php if (isset($slide['images'][1])): ?> extra-img <?php else: ?> no-extra-img <?php endif; ?> h-100">
            <div class="row h-100">

                <?php if (isset($slide['images'][1])): ?>
                    <div class="info-slider-img col-12 col-md-6 text-center <?php if (isset($slide['imgPosition'])): ?><?php print $slide['imgPosition']; ?><?php endif; ?> <?php if (isset($slide['imgMainOrder']) AND $slide['imgMainOrder'] != ''): ?><?php print $slide['imgMainOrder']; ?><?php else: ?> order-2 <?php endif; ?> <?php if (isset($slide['imgLargeOrder'])): ?><?php print $slide['imgLargeOrder']; ?><?php endif; ?>">
                        <a href="<?php if (isset($slide['url'])) {print $slide['url'];} else {?>javascript:;<?php } ?>">
                            <img src="<?php print thumbnail($slide['images'][1], 700, 700); ?>" title="<?php echo $primaryText; ?>"/>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="info-slider-text col-12 <?php if (isset($slide['images'][1])): ?> col-md-6 <?php else: ?> col-md-7 <?php endif; ?> <?php if (isset($slide['textPosition']) AND $slide['textPosition'] != ''): ?><?php print $slide['textPosition']; ?><?php else: ?> align-self-center <?php endif; ?> <?php if (isset($slide['textLargePosition']) AND $slide['textLargePosition'] != ''): ?><?php print $slide['textLargePosition']; ?><?php else: ?> <?php endif; ?> <?php if (isset($slide['textAlign']) AND $slide['textAlign'] != ''): ?><?php print $slide['textAlign']; ?><?php else: ?><?php endif; ?> <?php if (isset($slide['textLargeAlign']) AND $slide['textLargeAlign'] != ''): ?><?php print $slide['textLargeAlign']; ?><?php else: ?><?php endif; ?> py-6 py-md-3 px-lg-4 order-1">

                    <?php if (isset($slide['icon']) AND $slide['icon'] != '') { ?>
                       <span class="slide-icon d-inline-block h-m-b">
                        <?php print $slide['icon']; ?>
                      </span>
                    <?php } ?>

                    <div class="d-flex <?php if (isset($slide['reverseOrderText']) AND $slide['reverseOrderText'] != ''): ?><?php print $slide['reverseOrderText']; ?><?php else: ?> flex-column <?php endif; ?>">
                        <div class="slide-heading <?php if (isset($slide['primaryTextStyle']) AND $slide['primaryTextStyle'] != ''): ?><?php print $slide['primaryTextStyle']; ?><?php else: ?> display-4 <?php endif; ?> <?php if (isset($slide['primaryTextColor']) AND $slide['primaryTextColor'] != ''): ?><?php print $slide['primaryTextColor']; ?><?php else: ?><?php endif; ?> <?php if (isset($slide['primaryTextWeight']) AND $slide['primaryTextWeight'] != ''): ?><?php print $slide['primaryTextWeight']; ?><?php else: ?> <?php endif; ?>">
                            <?php if (isset($slide['primaryText'])) { ?><?php print $slide['primaryText']; ?><?php } ?>
                        </div>

                        <div class="slide-description <?php if (isset($slide['secondaryTextStyle']) AND $slide['secondaryTextStyle'] != ''): ?><?php print $slide['secondaryTextStyle']; ?><?php else: ?> lead <?php endif; ?> <?php if (isset($slide['secondaryTextColor']) AND $slide['secondaryTextColor'] != ''): ?><?php print $slide['secondaryTextColor']; ?><?php else: ?><?php endif; ?> <?php if (isset($slide['secondaryTextWeight']) AND $slide['secondaryTextWeight'] != ''): ?><?php print $slide['secondaryTextWeight']; ?><?php else: ?> <?php endif; ?>">
                            <?php if (isset($slide['secondaryText'])) { ?><?php print $slide['secondaryText']; ?><?php } ?>
                        </div>
                    </div>

                    <?php if (isset($slide['primaryText']) and $slide['primaryText'] != '' or isset($slide['secondaryText']) and $slide['secondaryText'] != ''): ?>
                        <?php if (isset($slide['url']) AND $slide['url'] != ''): ?>
                            <a href="<?php print $slide['url']; ?>" class="slide-link btn <?php if (!isset($slide['reverseOrderText'])): ?> btn-margin <?php elseif ($slide['reverseOrderText'] == 'flex-column'): ?> btn-margin <?php elseif ($slide['reverseOrderText'] == ''): ?> btn-margin <?php else: ?> <?php endif; ?> <?php if (isset($slide['buttonSize']) AND $slide['buttonSize'] != ''): ?><?php print $slide['buttonSize']; ?><?php else: ?><?php endif; ?> <?php if (isset($slide['buttonStyle']) AND $slide['buttonStyle'] != ''): ?><?php print $slide['buttonStyle']; ?><?php else: ?> btn-primary <?php endif; ?>">
                                <?php if (isset($slide['seemoreText']) and $slide['seemoreText'] != ''): ?><?php print $slide['seemoreText'] ?><?php else: ?> View More <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

