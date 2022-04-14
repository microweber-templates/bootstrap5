<?php
$phone_text = get_option('phone_text', $params['id']);


if ($phone_text == '') {
    $phone_text = $default_phone_text;
}
?>

<label class="control-label d-block">  Phone Number</label>
<select class="form-control  mb-3 mb-2 mw_option_field  " name="phone_text">
    <option value="yes"<?php if ($phone_text == 'yes') {
        echo 'selected';
    } ?>><?php _lang("Yes", "templates/big"); ?>
    </option>

    <option value="no"<?php if ($phone_text == 'no') {
        echo 'selected';
    } ?>><?php _lang("No", "templates/big"); ?>
    </option>
</select>

