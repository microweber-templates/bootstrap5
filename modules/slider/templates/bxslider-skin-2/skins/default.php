<?php if (isset($slide['primaryText'])) {
    $primaryText = $slide['primaryText'];

}
if (isset($slide['url'])) {
    $url = $slide['url'];
} else {
    $url = 'javascript:;';
}
?>

<section class="section py-0" data-background-position="center center" data-overlay="1">
    <div class="mh-100vh d-flex align-items-center background-image-holder" style="background-size: cover; background-image: url('<?php if (isset($slide['images'][0])): ?><?php print thumbnail($slide['images'][0], 1920, 1920); ?><?php else: ?><?php print template_url(); ?>assets/img/layouts/header-11.jpg<?php endif; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 col-lg-6 text-center text-lg-start allow-drop">
                    <?php if (isset($slide['primaryText'])) { ?>
                        <h1 class="mb-6"><?php echo $primaryText; ?></h1>
                    <?php } ?>

                    <?php if ($slide['seemoreText']): ?>
                        <a class="btn btn-primary   btn-lg px-5" href="<?php if (isset($slide['url'])): ?><?php print $slide['url']; ?><?php endif; ?>"><?php print $slide['seemoreText'] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
