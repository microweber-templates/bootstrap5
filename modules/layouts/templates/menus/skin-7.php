<?php

/*

  type: layout
  content_type: static
  name: Menu - skin-7
  position: 7
  description: Menu - skin-7
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

                <module type="logo" id="header-logo-<?php print $params['id']; ?>" class="d-flex mx-auto order-md-2 col-auto mw-big-header-logo w-auto"/>

            </div>
        </div>
    </nav>
</section>
