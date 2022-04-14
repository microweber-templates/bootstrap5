<?php
$contact_us_link = get_option('contact_us_link', $params['id']);

if ($contact_us_link == '') {
    $contact_us_link = $default_contact_us_link;
}
?>


<label class="control-label d-block">  Contact Us Button</label>
<select class="form-control  mb-3 mb-2 mw_option_field  " name="contact_us_link">
    <option value="yes"<?php if ($contact_us_link == 'yes') {
        echo 'selected';
    } ?>><?php _lang("Yes", "templates/big"); ?>
    </option>

    <option value="no"<?php if ($contact_us_link == 'no') {
        echo 'selected';
    } ?>><?php _lang("No", "templates/big"); ?>
    </option>
</select>


