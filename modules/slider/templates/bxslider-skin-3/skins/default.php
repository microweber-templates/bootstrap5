<?php if (isset($slide['primaryText'])) {
    $primaryText = $slide['primaryText'];

}
if (isset($slide['url'])) {
    $url = $slide['url'];
} else {
    $url = 'javascript:;';
}
?>

<section class="section py-0" data-background-position="center center" data-overlay="1" data-overlay-black="true">
    <div class="mh-100vh d-flex align-items-center background-image-holder" style="background-image: url('<?php if (isset($slide['images'][0])): ?><?php print thumbnail($slide['images'][0], $thumb_quality_x, $thumb_quality_y); ?><?php else: ?><?php print template_url(); ?>assets/img/layouts/header-17.jpg<?php endif; ?>')">
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
</section>
