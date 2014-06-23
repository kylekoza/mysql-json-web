<?php

    $db = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbusername, $dbpassword);

    $query = "SELECT * FROM $table;";

?>

