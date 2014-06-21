<?php
require("config.php");

$request = $_SERVER['REQUEST_URI'];
$pos = strpos($request, "mysql-json-web");
$request = substr($request, strpos($request, $basepath)+strlen($basepath));

$requestArray = split("/", $request);

$dbname = $requestArray[0];
$table = $requestArray[1];

$db = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbusername, $dbpassword);

$query = "SELECT * FROM $table;";

?>
