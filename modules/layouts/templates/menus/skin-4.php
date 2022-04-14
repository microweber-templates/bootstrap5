<?php

/*

  type: layout
  content_type: static
  name: Menu - skin-4
  position: 4
  description: Menu - skin-4
  categories: Menu

*/

?>
<?php
$default_contact_us_link = 'no';
$default_header_socials = 'no';
$default_phone_text = 'yes';
$default_profile_link = 'yes';
$default_search_bar = 'yes';
$default_shopping_cart = 'yes';
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
                <div class="col-auto d-flex  ms-auto order-2 order-lg-3 justify-content-md-end justify-content-center">
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

