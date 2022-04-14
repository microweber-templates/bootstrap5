<?php if ($shopping_cart == 'yes'): ?>
    <li class="nav-item dropdown btn-shopping-cart">
        <a href="#" class="nav-link d-flex align-items-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="badge badge-number badge-secondary badge-pill btn btn-outline-primary px-2 mx-2 js-shopping-cart-quantity"><?php print cart_sum(false); ?></span>
            <i class="mw-micon-Shopping-Cart" style="font-size: 24px"></i>
        </a>
        <div class="mw-big-dropdown-cart dropdown-menu shopping-cart px-2">
            <module type="shop/cart" template="small_modal" class="no-settings"/>
        </div>
    </li>
<?php endif; ?>
