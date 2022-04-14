<?php

/* Phone */

$phone_text = get_option('phone_text', $params['id']);
if ($phone_text == '') {
    $phone_text = $default_phone_text;
}
