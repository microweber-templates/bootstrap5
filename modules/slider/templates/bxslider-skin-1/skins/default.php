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
    <div class="mh-100vh d-flex align-items-center background-image-holder" style="background-image: url('<?php if (isset($slide['images'][0])): ?><?php print thumbnail($slide['images'][0], 1920, 1920); ?><?php else: ?><?php print template_url(); ?>assets/img/layouts/header-17.jpg<?php endif; ?>')">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto allow-drop">
                    <?php if (isset($slide['primaryText'])) { ?>
                        <h1 class="d-inline-block nodrop">
                            <?php echo $primaryText; ?>
                        </h1>
                    <?php } ?>
                    <?php if (isset($slide['secondaryText'])) { ?>
                        <p class="lead mb-6"><?php print $slide['secondaryText']; ?></p>
                    <?php } ?>
                    <?php
                        if ($slide['seemoreText']):

                        #bxSlider disables links
                        $btnAction = isset($slide['url']) ? 'onclick="location.href = \'' .  str_replace(['"',"'"], "", $slide['url']) . '\'" ' : '';
                    ?>
                        <span class="btn btn-primary btn-lg px-5" <?php  print $btnAction; ?>><?php print $slide['seemoreText'] ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
