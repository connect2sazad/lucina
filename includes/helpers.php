<?php

/**
 * File: helpers.php
 * Location: ./includes
 *
 * This file contains miscellaneous functions and constants used throughout the application.
 *
 * @author Sazad Ahemad
 * @company Lyncdigit Technologies Pvt. Ltd.
 * @version 1.0
 * @date 21/10/2023
 */

// Misc functions...

/**
 * Prefix a number with '0' if it's less than 10 and greater than 0.
 * 
 * @param int $no The number to be prefixed.
 * @return int|string The original number or the prefixed number.
 */
function prefix_0($no)
{
    return ($no < 10 && $no > 0) ? $no = '0' . $no : $no;
}

/**
 * Generate a random ID of a specified length and type.
 * 
 * @param int $length The length of the random ID.
 * @param string $type The type of the random ID (e.g., 'alpha_numeric').
 * @return string The generated random ID.
 */
function getRandomId($length, $type = 'alpha_numeric')
{
    switch ($type) {
        case 'alpha_numeric':
            $str = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            break;
        case 'alpha':
            $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            break;
        case 'alpha_uppercase':
            $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        case 'alpha_uppercase_numeric':
            $str = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
        case 'alpha_lowercase':
            $str = 'abcdefghijklmnopqrstuvwxyz';
            break;
        case 'alpha_lowercase_numeric':
            $str = '0123456789abcdefghijklmnopqrstuvwxyz';
            break;
        case 'numeric':
            $str = '0123456789';
            break;
        default:
            break;
    }
    return substr(str_shuffle($str), 0, $length);
}

/**
 * Minify HTML code by removing whitespace and line breaks.
 * 
 * @param string $html The HTML code to be minified.
 * @return string The minified HTML code.
 */
function minify_html($html)
{
    $minified_html = preg_replace('/\s+/', ' ', $html);
    $minified_html = str_replace("\t", "", $html);
    $minified_html = str_replace("\n", "", $minified_html);
    return $minified_html;
}

/**
 * Minify code by removing whitespace, line breaks, and comments.
 * 
 * @param string $code The code to be minified.
 * @return string The minified code.
 */
function minifier($code)
{
    $search = array(
        // Remove whitespaces after tags
        '/\>[^\S ]+/s',
        // Remove whitespaces before tags
        '/[^\S ]+\</s',
        // Remove multiple whitespace sequences
        '/(\s)+/s',
        // Removes comments
        '/<!--(.|\s)*?-->/'
    );
    $replace = array('>', '<', '\\1');
    $code = preg_replace($search, $replace, $code);
    return $code;
}

/**
 * Check if a string starts with a specified substring.
 * 
 * @param string $string The string to check.
 * @param string $startString The substring to check for at the beginning.
 * @return bool True if $string starts with $startString, false otherwise.
 */
function startsWith($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

/**
 * Extract a meta field ID from a string by removing a specified prefix.
 * 
 * @param string $string The input string.
 * @param string $startString The prefix to remove.
 * @return string The extracted meta field ID.
 */
function getMetaFieldId($string, $startString)
{
    return str_replace($startString, '', $string);
}

/**
 * Validate JSON data.
 * 
 * @param string $data The JSON data to validate.
 * @return bool True if the data is valid JSON, false otherwise.
 */
function json_validator($data)
{
    if (!empty($data)) {
        return is_string($data) &&
            is_array(json_decode($data, true)) ? true : false;
    }
    return false;
}

/**
 * Display the contents of a variable in a human-readable format.
 * 
 * @param mixed $object The variable to be displayed.
 */
function pre($object)
{
    $object = json_decode($object, true);
    echo "<pre>";
    print_r($object);
    echo "<pre/>";
}


/**
 * Check if a database row is trashed or deleted.
 * 
 * @param array $any_row The database row to check.
 * @return bool True if the row is trashed or deleted, false otherwise.
 */
function is_trashed_or_deleted($any_row)
{
    if ($any_row['is_trashed'] == 0 && $any_row['is_deleted'] == 0) {
        return false;
    } else {
        return true;
    }
}

/**
 * Secure an API request by removing the 'api_key' element from the request data.
 *
 * This function is used to enhance security by removing the 'api_key' element from the request data before processing the request.
 *
 * @param array $request An associative array representing the API request data.
 *
 * @return array The same input array with the 'api_key' element removed.
 */
function secure_API_KEY($request)
{
    if (array_key_exists('api_key', $request)) {
        unset($request['api_key']);
    }
    return $request;
}


/**
 * current_url() Function
 *
 * This PHP function is used to obtain the current URL of the web page. It checks whether
 * the page is served via HTTPS (Secure HTTP) and constructs the complete URL by
 * combining the protocol (HTTP or HTTPS), the host (domain), and the request URI,
 * which includes the path and any query parameters.
 *
 * @return string The current URL as a string.
 *
 * Example Usage:
 * $current_url = current_url();
 * echo "Current URL: " . $current_url;
 */

function current_url()
{
    // Check if the page is using HTTPS (Secure HTTP)
    $protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';

    // Get the host (domain) of the website
    $host = $_SERVER['HTTP_HOST'];

    // Get the request URI, which includes the path and any query parameters
    $request_uri = $_SERVER['REQUEST_URI'];

    // Combine the parts to construct the full URL
    $current_url = $protocol . $host . $request_uri;

    return $current_url;
}

function the_site_url(){
    if(ROOTDIR == false){
        $url = BASEURL."/";
    } else {
        $url = BASEURL."/".ROOTDIR."/";
    }
    return $url;
}

function assets($loc = '')
{
    $url = the_site_url()."assets/".$loc;
    return $url;
}

function css($css)
{
    $url = assets('css')."/".$css.".css";
    return $url;
}

function js($js)
{
    $url = assets('js')."/".$js.".js";
    return $url;
}

function img($img)
{
    $img_tag = assets('img')."/".$img;
    $img_tag = 'src="'.$img_tag.'" alt="'.pathinfo($img)['filename'].'"';

    return $img_tag;
}


function secure()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION[USER_GLOBAL_AUTH])) {
        return true;
    }

    return false;
}

function systemout()
{
    if (secure()) {
        unset($_SESSION[USER_GLOBAL_AUTH]);
        session_destroy();
        return true;
    }

    return false;
}

function redirect_not_secure()
{
    if (!secure()) {
        header("location: " . SITE_HOME);
    }
}

function img_src($url)
{
    $src = $url;
    $fileName = basename($url);
    $fileName = pathinfo($fileName, PATHINFO_FILENAME);
    return 'src="' . $src . '" alt="' . $fileName . '"';
}

function is_url($url)
{
    return stripos($url, "http") === 0;
}

function hit_url($api_url)
{
    $ch = curl_init($api_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response instead of outputting it

    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }

    curl_close($ch);

    $data = json_decode($response, true);

    if ($data === null) {
        die('Error decoding JSON data');
    }

    return $data;
}

function rupee($amount = null)
{
    if ($amount == null) {
        return "₹";
    } else {
        return "₹" . indian_number_format($amount);
    }
}

function indian_number_format($number)
{
    $pattern = "/\B(?=(\d{3})+(?!\d))/";
    $replace = ",";
    $commas = preg_replace($pattern, $replace, $number);
    return $commas; 
}

function in_words($number)
{
    $no = floor($number);
    $point = round($number - $no, 2) * 100;
    $hundred = null;
    $digits_1 = strlen($no);
    $i = 0;
    $str = array();
    $words = array(
        '0' => '', '1' => 'One', '2' => 'Two',
        '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
        '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
        '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
        '13' => 'Thirteen', '14' => 'Fourteen',
        '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
        '18' => 'Eighteen', '19' => 'Nineteen', '20' => 'Twenty',
        '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
        '60' => 'Sixty', '70' => 'Seventy',
        '80' => 'Eighty', '90' => 'Ninety'
    );
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
    while ($i < $digits_1) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += ($divider == 10) ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str[] = ($number < 21) ? $words[$number] .
                " " . $digits[$counter] . $plural . " " . $hundred
                :
                $words[floor($number / 10) * 10]
                . " " . $words[$number % 10] . " "
                . $digits[$counter] . $plural . " " . $hundred;
        } else $str[] = null;
    }
    $str = array_reverse($str);
    $result = implode('', $str);
    $points = ($point) ?
        $words[$point / 10] . " " .
        $words[$point = $point % 10] : '';

    $in_words = "Rupees " . $result;
    if ($points) {
        $in_words .= "and " . $points . " Paise";
    }
    $in_words .= ' only';
    return $in_words;
}


function data($variable){
    if(file_exists(DATA)){
        $data = file_get_contents(DATA);
        $data = json_decode($data);
    }
    return $data->$variable;
}

function page($page){
    if(substr($page, -1) == '/'){
        $page = str_replace('/', '', $page);
    }
    if(file_exists(___PAGES___.$page.".php")){
        include_once ___PAGES___.$page.".php";
    } else {
        echo "<h1>404</h1>";
    }
}

function component($component_name, $p=null){
    include_once ___COMPONENTS___.$component_name.".php";
}

function services_menu(){
    return array(
        "Esthétique",
        "Bien être",
        "Santé",
        "Le coin du sportif"
    );
}

function the_menus(){
    return array(
        "L'institut Lucina" => "",
        // "La Photobiomodulation, Qu'est-ce Que C'est" => "about",
        "La Photobiomodulation" => "about",
        "Carte des soins" => "services",
        "Le déroulement d'une séance" => "sessions",
        "Venir nous voir" => "contact"
    );
    // return array(
    //     "Votre Centre De Photobiomodulationi" => "",
    //     "Qu'est-ce-que C'est" => "about",
    //     "La Carte Des Soins" => "services",
    //     "Le Déroulement D'une Séance" => "sessions",
    //     "Pour Venir Nous Voir" => "contact"
    // );
}