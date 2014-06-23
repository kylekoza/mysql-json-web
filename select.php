<?php

    $db = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbusername,
                  $dbpassword);

    $sql = "SELECT * FROM $table;";
    $result = $db->query($sql);

    if ($format == "json") {
        include("json.php");
    }

    // Close the connection
    $db = null;

?>
