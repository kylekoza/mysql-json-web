<?php

    $db = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbusername,
                  $dbpassword);

    if (isset($_POST['WHERE'])) {
        if (isset($_POST['ORDER BY'])) {
            $sql = "SELECT * FROM $table WHERE {$_POST['WHERE']} ORDER BY {$_POST['ORDER BY']};";
        } else {
            $sql = "SELECT * FROM $table WHERE {$_POST['WHERE']};";
        }
    } else {
        $sql = "SELECT * FROM $table;";
    }

    $result = $db->query($sql);

    if ($format == "json") {
        include("json.php");
    }

    // Close the connection
    $db = null;

?>
