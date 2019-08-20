
[![Latest Stable Version](https://poser.pugx.org/cynojine/cynsms-api/v/stable)](https://packagist.org/packages/cynojine/cynsms-api?format=flat-square)
[![License](https://poser.pugx.org/cynojine/cynsms-api/license)](https://packagist.org/packages/cynojine/cynsms-api?format=flat-square)
[![GitHub issues](https://img.shields.io/github/issues/akasham67/ultimate-sms-api.svg?style=flat-square)](https://github.com/cynojine/cynsms-api/issues)
[![GitHub stars](https://img.shields.io/github/stars/cynojine/cynsms-api.svg?style=flat-square)](https://github.com/cynojine/cynsms-api/stargazers)

# Cyn SMS API

Cyn SMS API is build for Cyn SMS - Bulk SMS Application For Marketing


### Prerequisites

```
php >=5.6
Cyn SMS - Bulk SMS Application For Markting
```

### Installing
Via Composer
```
composer require cynojine/cynsms-api 
```

And Via Bash

```
git clone https://github.com/cynojine/cynsms-api.git
```

## Usage


 ### Step 1:
If install Cyn SMS API using Git Clone then load your Cyn SMS API Class file and Use namespace. 
```php
require_once 'src/Class_Cyn_SMS_API.php';
use CynSMS\CynSMSAPI;
```
If install Cyn SMS API using Composer then Require/Include autoload.php file in the index.php of your project or whatever file you need to use **Cyn SMS API** classes:. 
```php
require 'vendor/autoload.php';
use CynSMS\CynSMSAPI;
```
### Step 2:
set your API_KEY from `https://mywebhost.com/sms-api/info` (your application install url)
```php
$api_key = 'YWRtaW46YWRtaW4ucGFzc3dvcmQ=';
```
### Step 3:
Change the from number below. It can be a valid phone number or a String
```php
$from = '2699655847554';
```

### Step 4:
the number we are sending to - Any phone number
```php
$destination = '8801810000000';
```
You have to must include Country code at beginning of the phone number.  

### Step 5:
Replace your Install URL like `https://mywebhost.com/sms/api` with `https://console.cynsms.online/`
`sms/api` is mandatory on your install url

```php
$url = 'https://console.cynsms.online/sms/api';
```
// SMS Body
```php
$sms = 'test message from Cyn SMS';
```
// Unicode SMS
```php
$unicode = '1'; //For Unicode message
```
// Voice SMS
```php
$voice = '1'; //For voice message
```
// MMS SMS
```php
$mms = '1'; //For mms message
$media_url = 'https://yourmediaurl.com'; //Insert your media url
```
// Schedule SMS
```php
$schedule_date = '09/17/2018 10:20 AM'; //Date like this format: m/d/Y h:i A
```
// Create Plain/text SMS Body for request
```php
$sms_body = array(
    'api_key' => $api_key,
    'to' => $destination,
    'from' => $from,
    'sms' => $sms
);
```
// Create Unicode SMS Body for request
```php
$sms_body = array(
    'api_key' => $api_key,
    'to' => $destination,
    'from' => $from,
    'sms' => $sms,
    'unicode' => $unicode,
);
```

// Create Voice SMS Body for request
```php
$sms_body = array(
    'api_key' => $api_key,
    'to' => $destination,
    'from' => $from,
    'sms' => $sms,
    'voice' => $voice,
);
```
// Create MMS SMS Body for request
```php
$sms_body = array(
    'api_key' => $api_key,
    'to' => $destination,
    'from' => $from,
    'sms' => $sms, //optional
    'mms' => $mms,
    'media_url' => $media_url,
);
```
// Create Schedule SMS Body for request
```php
$sms_body = array(
    'api_key' => $api_key,
    'to' => $destination,
    'from' => $from,
    'sms' => $sms,
    'schedule' => $schedule_date,
);
```

### Step 6: 
Instantiate a new Cyn SMS API request
```php
$client = new CynSMSAPI();
```

## Send SMS
Finally send your sms through Ultimate SMS API
```php
$response = $client->send_sms($sms_body, $url);
```

## Get Inbox
Get your all message
```php
$get_inbox=$client->get_inbox($api_key,$url);
```

## Get Balance
Get your account balance
```php
$get_balance=$client->check_balance($api_key,$url);
```
## Response
Cyn SMS API return response with `json` format, like:

```json
{"code":"ok","message":"Successfully Send"}
```

## Status Code

| Status | Message |
| --- | --- |
| `ok` | Successfully Send |
| `100` | Bad gateway requested |
| `101` | Wrong action |
| `102` | Authentication failed |
| `103` | Invalid phone number |
| `104` | Phone coverage not active |
| `105` | Insufficient balance |
| `106` | Invalid Sender ID |
| `107` | Invalid SMS Type |
| `108` | SMS Gateway not active |
| `109` | Invalid Schedule Time |
| `110` | Media url required |
| `111` | SMS contain spam word. Wait for approval |

## Authors

* **Kazashim** - *Initial work* - [cynojine](https://github.com/cynojine)
