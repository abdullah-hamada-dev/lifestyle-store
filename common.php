<?php

// Turn off error reporting
error_reporting(0);

// // Report runtime errors
// error_reporting(E_ERROR | E_WARNING | E_PARSE);

// // Report all errors
// error_reporting(E_ALL);

// // Same as error_reporting(E_ALL);
// ini_set("error_reporting", E_ALL);

// // Report all errors except E_NOTICE
// error_reporting(E_ALL & ~E_NOTICE);
// $con = mysqli_connect("localhost", "id13734427_root", "lLw[ky0F/[Y?s-iK", "id13734427_store") or die(mysqli_error($con));
$con = mysqli_connect("localhost", "root", "123456789", "store") or die(mysqli_error($con));

    session_start();

?>