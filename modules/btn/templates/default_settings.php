<?php
$style = get_option('button_style', $params['id']);
$size = get_option('button_size', $params['id']);
$action = get_option('button_action', $params['id']);
$url = get_option('url', $params['id']);
$popupcontent = get_option('popupcontent', $params['id']);
$text = get_option('text', $params['id']);
$description = get_option('description', $params['id']);

$url_blank = get_option('url_blank', $params['id']);

if ($style == 'btn-default' OR $style == '') {
    $style = 'btn-primary';
}
?>
<div class="mw-ui-field-holder">
    <div class="mw-ui-row-nodrop">
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label class="mw-ui-label">
                    <?php _lang("Color", 'template/big'); ?>
                </label>
                <select class="mw-ui-field mw_option_field" name="button_style">
                    <option <?php if ($style == 'btn-primary'): ?>selected<?php endif; ?> value="btn-primary"><?php _lang("Primary", 'template/big'); ?></option>
                    <option <?php if ($style == 'btn-outline-primary'): ?>selected<?php endif; ?> value="btn-outline-primary"><?php _lang("Primary", 'template/big'); ?> Outline</option>
                    <option <?php if ($style == 'btn-secondary'): ?>selected<?php endif; ?> value="btn-secondary"><?php _lang("Secondary", 'template/big'); ?></option>
                    <option <?php if ($style == 'btn-outline-secondary'): ?>selected<?php endif; ?> value="btn-outline-secondary"><?php _lang("Secondary", 'template/big'); ?> Outline</option>
                    <option <?php if ($style == 'btn-info'): ?>selected<?php endif; ?> value="btn-info"><?php _lang("Info", 'template/big'); ?></option>
                    <option <?php if ($style == 'btn-outline-info'): ?>selected<?php endif; ?> value="btn-outline-info"><?php _lang("Info", 'template/big'); ?> Outline</option>
                    <option <?php if ($style == 'btn-success'): ?>selected<?php endif; ?> value="btn-success"><?php _lang("Success", 'template/big'); ?></option>
                    <option <?php if ($style == 'btn-outline-success'): ?>selected<?php endif; ?> value="btn-outline-success"><?php _lang("Success", 'template/big'); ?> Outline</option>
                    <option <?php if ($style == 'btn-warning'): ?>selected<?php endif; ?> value="btn-warning"><?php _lang("Warning", 'template/big'); ?></option>
                    <option <?php if ($style == 'btn-outline-warning'): ?>selected<?php endif; ?> value="btn-outline-warning"><?php _lang("Warning", 'template/big'); ?> Outline</option>
                    <option <?php if ($style == 'btn-danger'): ?>selected<?php endif; ?> value="btn-danger"><?php _lang("Danger", 'template/big'); ?></option>
                    <option <?php if ($style == 'btn-outline-danger'): ?>selected<?php endif; ?> value="btn-outline-danger"><?php _lang("Danger", 'template/big'); ?> Outline</option>
                    <option <?php if ($style == 'btn-link'): ?>selected<?php endif; ?> value="btn-link"><?php _lang("Simple", 'template/big'); ?></option>
                </select>
            </div>
        </div>
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label class="mw-ui-label">
                    <?php _lang("Size", 'template/big'); ?>
                </label>
                <select class="mw-ui-field mw_option_field" name="button_size">
                    <option <?php if ($size == ''): ?>selected<?php endif; ?> value="">
                        <?php _lang("Default", 'template/big'); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-large btn-lg'): ?>selected<?php endif; ?> value="btn-default-large btn-lg px-4">
                        <?php _lang("Large", 'template/big'); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-medium btn-md'): ?>selected<?php endif; ?> value="btn-default-medium btn-md px-4">
                        <?php _lang("Medium", 'template/big'); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-small btn-sm'): ?>selected<?php endif; ?> value="btn-default-small btn-sm px-4">
                        <?php _lang("Small", 'template/big'); ?>
                    </option>
                    <option <?php if ($size == 'btn-default-mini btn-xs'): ?>selected<?php endif; ?> value="btn-default-mini btn-xs px-4">
                        <?php _lang("Mini", 'template/big'); ?>
                    </option>
                </select>
            </div>
        </div>
    </div>
</div>
