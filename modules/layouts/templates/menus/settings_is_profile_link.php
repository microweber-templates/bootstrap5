<?php
$profile_link = get_option('profile_link', $params['id']);


if ($profile_link == '') {
    $profile_link = $default_profile_link;
}
?>


<label class="control-label d-block">  Profile Link</label>
<select class="form-control  mb-3 mb-2 mw_option_field  " name="profile_link">
    <option value="yes"<?php if ($profile_link == 'yes') {
        echo 'selected=selected';
    } ?>><?php _lang("Yes", "templates/big"); ?>
    </option>

    <option value="no"<?php if ($profile_link == 'no') {
        echo 'selected';
    } ?>><?php _lang("No", "templates/big"); ?>
    </option>
</select>


