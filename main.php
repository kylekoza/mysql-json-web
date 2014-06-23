<?php
// Require Variables
require("config.php");

// Get the request URI
$request = $_SERVER['REQUEST_URI'];

// Find the position of the base path in the request
$pos = strpos($request, $basepath);

// Get the request URI without the base path
$request = substr($request, $pos + strlen($basepath));

// Split the request URI into an array based on forward slashes
$requestArray = split("/", $request);

// Split the second item in the array to separate the table name from the
// filetype (There's probably a better way to do this)
$requestArray[1] = split(".", $requestArray[1]);

// Set variables based on the request URI
$dbname = $requestArray[0];
$table = $requestArray[1][0];
$foramt = $requestArray[1][1];

// Run the code for the SQL select statement. Later, we'll want to add logic
// here to determine which SQL statement is being run instead of just assuming
// SELECT
include("select.php");

?>
