<?php

/*

type: layout

name: Header 9

position: 9

categories: Header

*/

?>



<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-5';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<?php
$vimeo_url = get_option('vimeo_url', $params['id']);
if ($vimeo_url) {
    $vimeo_url = $vimeo_url;
} elseif (isset($params['data-vimeo-url'])) {
    $vimeo_url = $params['data-vimeo-url'];
} else {
    $vimeo_url = '22439234';
}
?>

<script>
    $(document).ready(function () {
        $('.js-play-button').trigger('click');
    });

    function playVideo(parent, thisButton) {
        thisButton.fadeOut(500);

        var videoHolder = $(parent).find('.background-video-holder');

        var iframeSrc = videoHolder.find('.video iframe').data('src');
        videoHolder.find('.video iframe').attr('src', iframeSrc);
        videoHolder.find('.video iframe').prop('autoplay', true);

        setTimeout(function () {
            videoHolder.find('.placeholder').fadeOut(500);
        }, 1000);
    }
</script>

<section class="section mw-layout-overlay-wrapper  py-0 edit-x safe-mode nodrop" data-overlay-black="true" data-overlay="5">
    <div class="mw-layout-overlay"></div>
    <div class="mh-100vh overflow-hidden position-relative">
        <div class="background-video-holder">
            <div class="placeholder" style="background-image: url('<?php print template_url(); ?>assets/img/layouts/header-9.jpg'); display: none;"></div>
            <div class="video">
                <iframe data-src="https://player.vimeo.com/video/<?php echo $vimeo_url; ?>?autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay;"></iframe>
                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
        </div>

        <div class="section py-0 edit safe-mode nodrop position-relative" field="layout-header-skin-9-<?php print $params['id'] ?>" rel="module">
            <div class="container mw-layout-overlay-container py-0 text-white">
                <div class="row mh-100vh d-flex justify-content-between align-content-center">
                    <div class="col-12 mx-auto mx-lg-0 allow-drop">
                        <h1 class="header-section-title mb-6">Describe your company </h1>
                        <p class="header-section-p lead">Describe your company and services with few words and explain why you are the best choice.</p>
                    </div>

                    <div class="col-12 col-lg-10 col-lg-6 mx-auto mx-lg-0 text-center">
                        <button type="button" class="btn btn-light btn-icon js-play-button" style="display: none;" onclick="playVideo('#<?php echo $params['id']; ?>', $(this)); return;"><i class="mdi mdi-play-circle"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
