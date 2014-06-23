<?php

    $db = new PDO("mysql:host=$dbserver;dbname=$dbname", $dbusername,
                  $dbpassword);

    $sql = "SELECT * FROM $table;";
    $result = $db->query($sql);

    // Fetch and encode the table into json format
    $json_response = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $json_response[] = $row;
    }
    echo json_encode($json_response);

    // Close the connection
    $db = null;

?>

