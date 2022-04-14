<?php
$search_bar = get_option('search_bar', $params['id']);

if ($search_bar == '') {
    $search_bar = $default_search_bar;
}
?>




<label class="control-label d-block">  Search</label>
<select class="form-control  mb-3 mb-2 mw_option_field  " name="search_bar">
    <option value="yes"<?php if ($search_bar == 'yes') {
        echo 'selected=selected';
    } ?>><?php _lang("Yes", "templates/big"); ?>
    </option>

    <option value="no"<?php if ($search_bar == 'no') {
        echo 'selected';
    } ?>><?php _lang("No", "templates/big"); ?>
    </option>
</select>


