<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// home page url
$home_url = "http://localhost/rest-api-test/";

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$records_per_page = 5;

$from_record_num = ($records_per_page * $page) - $records_per_page;

// set your default time-zone
date_default_timezone_set('Asia/Singapore');
 
// variables used for jwt
$key = "Breakfastwithdaddy";
$iss = "http://example.org";
$aud = "http://example.com";
$iat = 1356999524;
$nbf = 1357000000;

?>