<?php

session_start();

function validateData($data)
{
    # code...
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    $resultData = filter_var($resultData, FILTER_SANITIZE_STRING);
    $resultData = trim($resultData);
    return $resultData;
}


// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);


date_default_timezone_set('Africa/Lagos');

$date = date ('d-m-y h:i:s');





?>
