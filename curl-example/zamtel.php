<?php

// Step 1: set your API_KEY from https://sms.cynojine.com/sms-api/info

$key = 'eeb45fcda355161e419c5763f8b943ec';

// Step 2: Change the from number below. It can be a valid phone number or a String
$senderid = 'Cynojine';

// Step 3: the number we are sending to - Any phone number. You must have to insert country code at beginning of the number
$contacts = '260965058568';

// Step 4: Replace your Install URL like https://mywebhost.com/sms/api with https://sms.cynojine.com/
// <sms/api> is mandatory.

$url = 'https://bulksms.zamtel.co.zm/api/sms/send/batch';

// the sms body
$message = 'test message from Cyn Sms';

// Create SMS Body for request
$sms_body = array(
    'key' => $key,
    'contacts' => $contacts,
    'senderid' => $senderid,
    'message' => $message
);

$send_data = http_build_query($sms_body);

$gateway_url = $url . "?" . $send_data;

try {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $gateway_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    $output = curl_exec($ch);

    if (curl_errno($ch)) {
        $output = curl_error($ch);
    }
    curl_close($ch);

    var_dump($output);

}catch (Exception $exception){
    echo $exception->getMessage();
}