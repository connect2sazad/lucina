<?php


/**
 * File: functions.php
 * Location: ./includes
 *
 * This file contains a collection of functions used throughout the application, including functions for loading styles and scripts, manipulating metadata, titles, and favicons, and performing various database operations.
 *
 * @author Sazad Ahemad
 * @company Lyncdigit Technologies Pvt. Ltd.
 * @version 1.0
 * @date 21/10/2023
 */

// Include necessary files
include_once ___INC___ . "helpers.php";
if (USE_DATABASE) {
    include_once ___INC___ . "mysql.php";
}


/**
 * Load HTML meta tags for a web page.
 *
 * This function generates HTML meta tags, including common meta tags for character encoding, viewport, and a canonical link.
 * It also allows you to retrieve additional meta data from the database based on a specified unique name.
 *
 * @param string ...$meta_unique_name (optional) A unique name used to query additional meta data from the database.
 *
 * @return string HTML code for meta tags.
 */
function loadMetaData(...$meta_unique_name)
{
    // Default meta tags
    $meta = '
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="canonical" href="' . the_site_url() . '" />
        ';


    return $meta;
}


/**
 * Load HTML title and favicon (site icon) for a web page.
 *
 * This function generates HTML title and favicon (site icon) tags for a web page. It allows you to customize the page title and favicon.
 *
 * @param string ...$basic (optional) Parameters to customize the title and favicon.
 *   - $basic[0] (optional): Custom page title. If not provided, the default site name is used.
 *   - $basic[1] (optional): Custom favicon (site icon) URL. If not provided, the default favicon is used.
 *
 * @return string HTML code for the title and favicon tags.
 */
function loadTitleAndFavicon($title = '', $favicon = '')
{
    if (function_exists('systemVariable')) {
        // Customize the page title based on the provided parameters
        if ($title != '') {
            $final_title = $title . ' — ' . systemVariable('SITE_NAME');
        } else {
            $final_title = systemVariable('SITE_NAME');
        }

        // Customize the favicon (site icon) URL based on the provided parameters
        if ($favicon != '') {
            $final_favicon = $favicon;
        } else {
            $final_favicon = systemVariable('SITE_DIR') . systemVariable('SITE_ICON');
        }
    } else {
        // Customize the page title based on the provided parameters
        if ($title != '') {
            $final_title = $title . ' — ' . data('project') . " - " . data('tagline');
        } else {
            $final_title = data('project') . " - " . data('tagline');
        }

        // Customize the favicon (site icon) URL based on the provided parameters
        if ($favicon != '') {
            $final_favicon = $favicon;
        } else {
            $final_favicon = assets('img/favicon.jpg');
        }
    }


    // Create a compound string containing title and favicon tags
    $compound = '
        <title>' . $final_title . '</title>
        <link rel="shortcut icon" href="' . $final_favicon . '">
        <link rel="apple-touch-icon image_src" href="' . $final_favicon . '">
        <link rel="icon" href="' . $final_favicon . '">
    ';

    return $compound;
}


function loadFonts()
{
    $fonts = '
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    ';

    return $fonts;
}


function loadIcons()
{
    $icons = '
        <!-- Font Awesome CDN link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    ';

    return $icons;
}


/**
 * Load stylesheets for the application.
 *
 * This function generates HTML code to load various CSS stylesheets, including Font Awesome, toast notification styles, Swiper styles, and custom CSS files.
 *
 * @return string HTML code for loading stylesheets.
 */
function loadStyleSheets()
{
    // Stylesheet links
    $stylesheets = '
        <link rel="stylesheet" href="' . assets('lib/animate/animate.min.css') . '" rel="stylesheet" />
        <link rel="stylesheet" href="' . assets('lib/owlcarousel/assets/owl.carousel.min.css') . '" rel="stylesheet" />
        <link rel="stylesheet" href="' . assets('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') . '" rel="stylesheet" />

        <link rel="stylesheet" href="' . css('style') . '" />
        <link rel="stylesheet" href="' . css('addon') . '" />
    ';

    return $stylesheets;
}

function customStyleSheet($custom_style)
{
    $loc = is_url($custom_style) ? $custom_style : css($custom_style);
    return '<link rel="stylesheet" href="' . $loc . '" />';
}


/**
 * Load JavaScript scripts for the application.
 *
 * This function generates HTML code to load various JavaScript scripts, including jQuery, toast notification script, and custom JavaScript files.
 *
 * @return string HTML code for loading JavaScript scripts.
 */
function loadScripts()
{
    // JavaScript script links
    $scripts = '
        
    ';

    return $scripts;
}

function customScript($custom_script)
{
    $loc = is_url($custom_script) ? $custom_script : js($custom_script);
    return '<script src="' . $loc . '"></script>';
}


/**
 * Load JavaScript scripts in the footer of the application.
 *
 * This function generates HTML code to load JavaScript scripts in the footer of web pages. It includes scripts for toast notifications, swiper, and optionally a base JavaScript file and a custom JavaScript file.

 * @param bool $load_base Whether to load the base JavaScript file (default: true).
 *
 * @return string HTML code for loading JavaScript scripts in the footer.
 */
function loadFooterScripts($load_base = true)
{
    $footer_scripts = '
        <script src="' . assets('lib/easing/easing.min.js') . '"></script>
        <script src="' . assets('lib/waypoints/waypoints.min.js') . '"></script>
        <script src="' . assets('lib/counterup/counterup.min.js') . '"></script>
        <script src="' . assets('lib/owlcarousel/owl.carousel.min.js') . '"></script>
        <script src="' . assets('lib/tempusdominus/js/moment.min.js') . '"></script>
        <script src="' . assets('lib/tempusdominus/js/moment-timezone.min.js') . '"></script>
        <script src="' . assets('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') . '"></script>
        <script src="' . assets('mail/jqBootstrapValidation.min.js') . '"></script>
        <script src="' . assets('mail/contact.js') . '"></script>
        
        <!-- Addon JS -->
        <script src="' . js('main') . '"></script>
        <script src="' . js('addon') . '"></script>
        
        ';

    return $footer_scripts;
}


/**
 * Generate an Ajax requester script for making secure API requests.
 *
 * This function generates a JavaScript script that can be included in your web pages to make secure Ajax requests to your API. It ensures that the API key is included and helps protect against unauthorized access.
 *
 * @return string The JavaScript script for making Ajax requests.
 */
function getAjaxRequesterDetails()
{

    $api_url = base64_encode(systemVariable('SITE_DIR') . "api/");

    $requester_script = "
        <script>
                const api_url = \"" . $api_url . "\";
                const api_key = \"" . md5('MTDNG-PDDGD-MHMV4-F2MBY-RCXKK') . "\";
        </script>
    ";

    return $requester_script;
}



/**
 * Redirect to SITE_HOME to protect a directory.
 */
function protect_dir()
{
    header('location: ' . SITE_HOME);
}
