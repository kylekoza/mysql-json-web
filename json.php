<?php
    // Fetch and encode the table into json format
    $json_response = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $json_response[] = $row;
    }
    echo json_encode($json_response);

?>
