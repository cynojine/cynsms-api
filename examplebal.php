<?php

/* Send an SMS using Cyn SMS. You can run this file 3 different ways:
 *
 * 1. Save it as example.php and at the command line, run
 *         php example.php
 *
 * 2. Upload it to a web host and load mywebhost.com/example.php
 *    in a web browser.
 *
 * 3. Download a local server like WAMP, MAMP or XAMPP. Point the web root
 *    directory to the folder containing this file, and load
 *    localhost:8888/example.php in a web browser.
 */


// Step 1: Get the Cyn SMS API library from https://github.com/cynojine/cynsms-api,
// following the instructions to install it with Composer.

require_once 'src/Class_Cyn_SMS_API.php';
use CynSMS\CynSMSAPI;
