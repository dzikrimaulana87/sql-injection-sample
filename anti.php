<?php
session_start();

// db config
$db = new PDO('mysql:host=localhost;dbname=dvwa', 'root', '');


// Check if the form is submitted
if (isset($_POST['Submit'])) {

    // Get input
    $input = $_POST['id'];
    $id = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Was a number entered?
    //if (is_numeric($id)) {
        $id = intval($id);

        // Use parameterized queries to prevent SQL Injection
        // Check the database
        $data = $db->prepare('SELECT first_name, last_name FROM users WHERE user_id = :id LIMIT 1;');
        $data->bindParam(':id', $id, PDO::PARAM_INT);
        $data->execute();
        $row = $data->fetch();

        // Make sure only 1 result is returned
        if ($data->rowCount() == 1) {
            // Get values
            $first = $row['first_name'];
            $last = $row['last_name'];

            // Feedback for end user
            echo "<pre>ID: {$id}<br />First name: {$first}<br />Surname: {$last}</pre>";
        }
    // } else {
    //     // Token validation failed, handle accordingly
    //     echo "Token validation failed!";
    // }
}

// Generate and store Anti-CSRF token
?>