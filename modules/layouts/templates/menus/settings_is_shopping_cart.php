<?php
$shopping_cart = get_option('shopping_cart', $params['id']);

if ($shopping_cart == '') {
    $shopping_cart = $default_shopping_cart;
}
?>


<label class="control-label d-block">  Shopping Cart</label>
<select class="form-control  mb-3 mb-2 mw_option_field  " name="shopping_cart">
    <option value="yes"<?php if ($shopping_cart == 'yes') {
        echo 'selected=selected';
    } ?>><?php _lang("Yes", "templates/big"); ?>
    </option>

    <option value="no"<?php if ($shopping_cart == 'no') {
        echo 'selected';
    } ?>><?php _lang("No", "templates/big"); ?>
    </option>
</select>


