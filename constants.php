<?php

/**
 * File: constants.php
 * Location: Root(.)
 *
 * This file defines various constants used throughout the application for configuration, paths, and time zone settings.
 *
 * @author Sazad Ahemad
 * @company Lyncdigit Technologies Pvt. Ltd.
 * @version 1.0
 */


if (!defined('BASEURL')) {
    define('BASEURL', "http" . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "s" : "") . "://$_SERVER[HTTP_HOST]");
}

if (!defined('ROOTDIR')) {
    define('ROOTDIR', 'lucina');
}

// Define the current time zone for the application.
if (!defined('CURRENT_TIME_ZONE')) {
    define('CURRENT_TIME_ZONE', 'Asia/Kolkata');
}

if (!defined('SHOW_ERRORS')) {
    define('SHOW_ERRORS', 1);
    // define('SHOW_ERRORS', 0);
}

if (!defined('USE_DATABASE')) {
    define('USE_DATABASE', false);
}

if (!defined('___ABS_PATH___')) {
    define('___ABS_PATH___', __DIR__ . '/');
}

if (!defined('___PAGES___')) {
    define('___PAGES___', ___ABS_PATH___ . 'pages/');
}

if (!defined('___INC___')) {
    define('___INC___', ___ABS_PATH___ . 'includes/');
}

if (!defined('___PAGES___')) {
    define('___PAGES___', ___ABS_PATH___ . 'pages/');
}

if (!defined('___COMPONENTS___')) {
    define('___COMPONENTS___', ___ABS_PATH___ . 'components/');
}

if (!defined('DATA')) {
    define('DATA', ___INC___ . 'data.json');
}

if (!defined('___ASSETS___')) {
    define('___ASSETS___', ___ABS_PATH___ . 'assets/');
}

if (!defined('___FUNCTIONS___')) {
    define('___FUNCTIONS___', ___INC___ . 'functions.php');
}

if (!defined('___CLASSES___')) {
    define('___CLASSES___', ___INC___ . 'classes.php');
}

if (!defined('___DB_CON___')) {
    define('___DB_CON___', ___INC___ . 'db_con.php');
}

if (!defined('GOOGLE_INSIGHTS')) {
    define('GOOGLE_INSIGHTS', '##########');
}

// Define the name of a global variable for user-related information.
if (!defined('USER_GLOBAL_AUTH')) {
    define('USER_GLOBAL_AUTH', 'lucina_user');
}

// Construct the current URI (Uniform Resource Identifier) using server variables.
if (!defined('URI_URL')) {
    define('URI_URL', "http" . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "s" : "") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
}

// Set the default time zone for the application.
date_default_timezone_set(CURRENT_TIME_ZONE);

// Default Errors display
error_reporting(E_ALL);
ini_set('display_errors', SHOW_ERRORS);