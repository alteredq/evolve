<?php
function sanitize($text) {
    $tmp = trim($text);
    $old = array("\'", "\"", "?", "!", "*", "(", ")", "[", "]", "{", "}");
    $new = array("",   "",   "",  "",  "",  "",  "",  "",  "",  "",  "" );
    $tmp = str_replace($old, $new, $tmp);
    return $tmp;
}

//  path must be always relative
function sanitize_image($text) {
    $tmp = sanitize($text);
    $tmp = ltrim($tmp, "/\\.");
    return $tmp;
}

$image_filename = sanitize_image($_GET['i']);

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, $image_filename);
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
?>