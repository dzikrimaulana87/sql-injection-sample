<?php

if (isset($_REQUEST['Submit'])) {
    // Get input
    $id = $_REQUEST['id'];

    // Check database
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'dvwa';

    // Establish a new connection
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT first_name, last_name FROM users WHERE user_id = '$id';";
    $result = $conn->query($query);

    // Get results
    while ($row = $result->fetch_assoc()) {
        // Get values
        $first = $row["first_name"];
        $last = $row["last_name"];

        // Feedback for end user
        echo "<pre>ID: {$id}<br />First name: {$first}<br />Surname: {$last}</pre>";
    }

    // Close the connection
    $conn->close();
}
?>
