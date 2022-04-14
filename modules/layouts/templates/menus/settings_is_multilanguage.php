<?php
$multilanguage = get_option('multilanguage', $params['id']);

if ($multilanguage == '') {
    $multilanguage = $default_multilanguage;
}

?>



<label class="control-label d-block">  Multilanguage</label>
<div class="w-100">
    <select class="form-control mb-3 mb-2 mw_option_field " name="multilanguage">
        <option value="yes"<?php if ($multilanguage == 'yes') {
            echo 'selected';
        } ?>><?php _lang("Yes", "templates/big"); ?>
        </option>

        <option value="no"<?php if ($multilanguage == 'no') {
            echo 'selected';
        } ?>><?php _lang("No", "templates/big"); ?>
        </option>
    </select>

    <?php  if (\MicroweberPackages\Multilanguage\MultilanguageHelpers::multilanguageIsEnabled()) { ?>
        <span class="text-success">Multilanguage activated.</span>
    <?php } else { ?>
<span class="text-"></span>
        <a href="<?php echo admin_url(); ?>/view:modules/load_module:multilanguage" target="_blank">Activate your multilanguage module</a></span>
        <small class="text-muted d-block mb-3">If you don't find the multilanguage module, you should install it from the marketplace.</small>
    <?php } ?>
</div>
