<?php
$header_socials = get_option('header_socials', $params['id']);


if ($header_socials == '') {
    $header_socials = $default_header_socials;
}
?>


<label class="control-label d-block">  Social Networks</label>
<select class="form-control  mb-3 mb-2 mw_option_field  " name="header_socials">
    <option value="yes"<?php if ($header_socials == 'yes') {
        echo 'selected';
    } ?>><?php _lang("Yes", "templates/big"); ?>
    </option>

    <option value="no"<?php if ($header_socials == 'no') {
        echo 'selected';
    } ?>><?php _lang("No", "templates/big"); ?>
    </option>
</select>

