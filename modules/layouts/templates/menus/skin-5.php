<?php

/*

  type: layout
  content_type: static
  name: Menu - skin-5
  position: 5
  description: Menu - skin-5
  categories: Menu

*/

?>

<?php
$default_contact_us_link = 'no';
$default_header_socials = 'no';
$default_phone_text = 'no';
$default_profile_link = 'no';
$default_search_bar = 'no';
$default_shopping_cart = 'no';
$default_multilanguage = 'no';
$default_is_sticky_nav = 'no';

include(__DIR__.'/settings_is_search_bar_front.php');
include(__DIR__.'/settings_is_shopping_cart_front.php');
include(__DIR__.'/settings_is_contact_us_link_front.php');
include(__DIR__.'/settings_is_header_socials_front.php');
include(__DIR__.'/settings_is_phone_front.php');
include(__DIR__.'/settings_is_profile_link_front.php');
include(__DIR__.'/settings_is_sticky_nav_front.php');
include(__DIR__.'/settings_is_multilanguage_front.php');
?>
<section class="header-background">

    <nav class="navbar navbar-expand-lg navbar-light header-background header-style-3">
        <div class="container-fluid px-lg-5 px-0 justify-content-center">
            <div class="row col-12 d-flex ">

                <module type="logo" id="header-logo-<?php print $params['id']; ?>" class="d-flex mx-auto mx-md-0 col-auto mw-big-header-logo w-auto"/>



                <div class="col-2 col-md-auto d-block d-lg-none py-2 mw-big-navbar-toggler order-3 order-lg-1 d-flex justify-content-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-text header-menu-toggle-button"></span>
                    </button>
                </div>

                <div class="col-auto d-flex  ms-md-auto mx-auto mx-md-0 order-2 order-lg-3 justify-content-md-end justify-content-center">
                    <div class="collapse navbar-collapse top-0 bottom-0 justify-content-center" id="navbarSupportedContent" style="z-index: 9;">
                        <module type="menu" name="header_menu" id="header_menu" template="navbar" class="nav-holder"/>
                    </div>
                </div>

                <div class="col-auto d-flex  ms-md-auto mx-auto mx-md-0 order-2 order-lg-2 justify-content-center">
                    <ul class="nav nav-navbar align-items-center justify-content-md-end justify-content-center">
                        <?php include template_dir() . "partials/header/parts/search_bar.php"; ?>
                        <?php include template_dir() . "partials/header/parts/contact.php"; ?>
                        <?php include template_dir() . "partials/header/parts/socials.php"; ?>
                        <?php include template_dir() . "partials/header/parts/multilanguage.php"; ?>
                        <?php include template_dir() . "partials/header/parts/phone.php"; ?>
                        <?php include template_dir() . "partials/header/parts/profile_link.php"; ?>
                        <?php include template_dir() . "partials/header/parts/shopping_cart.php"; ?>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>
