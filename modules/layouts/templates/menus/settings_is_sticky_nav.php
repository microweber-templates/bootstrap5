<?php
$sticky_navigation = get_option('sticky_navigation', $params['id']);

if ($sticky_navigation == '') {
    $sticky_navigation = $default_is_sticky_nav;
}

?>



<label class="control-label d-block">  Sticky Navigation</label>
<div class="w-100">
    <select class="form-control mb-3 mb-2 mw_option_field " name="sticky_navigation">

        <option value="yes"<?php if ($sticky_navigation == 'yes') {
            echo 'selected';
        } ?>><?php _lang("Yes", "templates/big"); ?>
        </option>

        <option value="no"<?php if ($sticky_navigation == 'no') {
            echo 'selected';
        } ?>><?php _lang("No", "templates/big"); ?>
        </option>
    </select>
</div>


