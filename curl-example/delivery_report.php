<?php

// Step 1: set your API_KEY from https://mywebhost.com/sms-api/info

$api_key = 'xxxxxxxxxxxxxxxxxxxxxxxx';

// Step 2: Replace your Install URL like https://mywebhost.com/sms/api with https://sms.cynojine.com/
// <sms/api> is mandatory.

$url = 'https://sms.cynojine.com/sms/api';

// Create SMS Body for request
$sms_body = array(
    'action' => 'get-inbox',
    'api_key' => $api_key
);

$send_data = http_build_query($sms_body);

$gateway_url = $url . "?" . $send_data;
