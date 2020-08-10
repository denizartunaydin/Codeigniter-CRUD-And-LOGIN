<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'dashboard';

$route["dashboard"]      = "dashboard/index";
$route["dashboard/(.*)"] = "dashboard/$1";


$route["user"]      = "user/index";
$route["user/(.*)"] = "user/$1";

$route["userop"]      = "userop/index";
$route["userop/(.*)"] = "userop/$1";

$route["login"]  = "userop/login";
$route["logout"] = "userop/logout";
$route["sigin"]  = "userop/do_login";
$route["forget"] = "userop/forget_password";
$route["reset"]  = "userop/reset_password";


$route["^(.*)"] = "index/$1";

$route['404_override'] = 'dashboard/notfound';
$route['translate_uri_dashes'] = FALSE;
